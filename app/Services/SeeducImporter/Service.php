<?php

namespace App\Services\SeeducImporter;

use DB;
use Carbon\Carbon;
use League\Csv\Reader;
use Illuminate\Support\Str;
use App\Data\Entities\Seeduc as Model;

class Service
{
    protected $command;

    protected $fields = [
        'escola',
        'municipio',
        'regional',
        'nome',
        'matricula',
        'nascimento'
    ];

    public function __construct($command = null)
    {
        $this->command = $command;
    }

    private function getFirstLine($reader)
    {
        $row = '';

        foreach ($reader as $index => $row) {
            if ($index == 0) {
                break;
            }
        }

        return $row[0];
    }

    public function import($file = null, $dontTruncate = true)
    {
        ini_set('auto_detect_line_endings', '1');
        ini_set('max_execution_time', 0);

        DB::transaction(function () use ($file, $dontTruncate) {
            $reader = $this->read($file);

            if (!$dontTruncate) {
                DB::statement('delete from seeduc');
            }

            $counter = 0;

            foreach ($reader as $index => $row) {
                if ($index == 0) {
                    continue;
                }

                if (count($row) !== 6) {
                    continue;
                }

                $line = '';
                collect($row)->each(function ($item) use (&$line) {
                    $line .= $item . ';';
                });

                try {
                    $model = Model::updateOrCreate(
                        ['matricula' => $row[4]],
                        [
                            'escola' => $row[0],
                            'municipio' => $row[1],
                            'regional' => $row[2],
                            'nome' => $row[3],
                            'matricula' => $row[4],
                            'nascimento' => $this->toDate(
                                $row[5],
                                'Y-m-d H:i:s.u'
                            )
                        ]
                    );
                } catch (\Exception $exception) {
                    dump(class_basename($exception));
                    dump($exception->getMessage());
                    dump($line);
                    continue;
                }

                $counter++;

                if ($counter < 5 or $counter % 1000 == 0) {
                    $this->info($counter . ' - ' . $model->id . ' -> ' . $line);
                }
            }
        });
    }

    public function info($message)
    {
        $this->command && $this->command->info($message);
    }

    public function isValid($fileName)
    {
        $row = $this->getFirstLine($this->read($fileName));

        foreach (explode(';', $row) as $index => $field) {
            if (Str::lower($this->fields[$index]) !== Str::lower($field)) {
                return false;
            }
        }

        return true;
    }

    private function read($fileName = null)
    {
        $reader = Reader::createFromPath(
            $fileName ?: database_path(env('SEEDUC_CSV_FILE'))
        );

        $reader->setDelimiter(';');

        return $reader;
    }

    protected function toDate($date, $format = 'd/m/y')
    {
        try {
            return Carbon::createFromFormat($format, $date)->toDateString();
        } catch (\Exception $exception) {
            return Carbon::createFromFormat($format, $date)->toDateString();
        }
    }
}
