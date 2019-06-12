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
        'escola' ,
        'municipio' ,
        'regional' ,
        'nome' ,
        'matricula' ,
        'nascimento' ,
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
        ini_set("auto_detect_line_endings", "1");
        ini_set('max_execution_time', 3000);

        DB::transaction(function() use ($file, $dontTruncate) {
            $reader = $this->read($file);

            if (!$dontTruncate) {
                DB::statement('delete from seeduc');
            }

            $counter = 0;

            foreach ($reader as $index => $row) {
                if ($index == 0) {
                    continue;
                }

                $row = explode(';', $line = $row[0]);

                if (count($row) !== 6) {
                    continue;
                }

                try {
                    $model = Model::create([
                        'escola' => $row[0],
                        'municipio' => $row[1],
                        'regional' => $row[2],
                        'nome' => $row[3],
                        'matricula' => $row[4],
                        'nascimento' => $this->toDate($row[5]),
                    ]);
                } catch (\Exception $exception) {
                    dump($exception->getMessage());
                    dump($line);
                    continue;
                }

                $counter++;

                if ($counter % 1000 == 0) {
                    $this->info($counter.' - '.$model->id.' -> '.$line);
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
        return Reader::createFromPath($fileName ?: database_path(env('SEEDUC_CSV_FILE')));
    }

    protected function toDate($date)
    {
        try {
            return Carbon::createFromFormat('d/m/y', $date);
        } catch (\Exception $exception)
        {
            return Carbon::createFromFormat('d/m/Y', $date);
        }
    }
}
