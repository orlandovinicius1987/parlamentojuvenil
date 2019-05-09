<?php

namespace App\Console\Commands;

use App\Data\Entities\Seeduc;
use League\Csv\Statement;
use Illuminate\Console\Command;
use Illuminate\Foundation\Bus\DispatchesJobs;
use App\Services\SeeducImporter\Service as SeeducImporter;

class PjSeeducTest extends Command
{
    use DispatchesJobs;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pj:seeduc:test-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Seed seeduc test data';

    private function getData()
    {
        return collect([
            [
                'escola' => 'CE AGOSTINHO PORTO',
                'municipio' => 'SÃO JOÃO DE MERITI',
                'regional' => 'METROPOLITANA VII',
                'nome' => 'FACEBOOK DO NASCIMENTO PELICIONI',
                'matricula' => '001FACEBOOK',
                'nascimento' => '2014-04-12',
            ],

            [
                'escola' => 'CE AGOSTINHO PORTO',
                'municipio' => 'SÃO JOÃO DE MERITI',
                'regional' => 'METROPOLITANA VII',
                'nome' => 'ANTONIO CARLOS DO NASCIMENTO PELICIONI',
                'matricula' => '002ANTONIOCARLOS',
                'nascimento' => '2014-10-31',
            ],

            [
                'escola' => 'CE AGOSTINHO PORTO',
                'municipio' => 'SÃO JOÃO DE MERITI',
                'regional' => 'METROPOLITANA VII',
                'nome' => 'BRENOT NASCIMENTO PELICIONI',
                'matricula' => '003BRENOT',
                'nascimento' => '2014-01-01',
            ],

            [
                'escola' => 'CE ALVARO ALVIM',
                'municipio' => 'MIGUEL PEREIRA',
                'regional' => 'CENTRO SUL',
                'nome' => 'BRUNO CAMPOS BARBOSA',
                'matricula' => '004BRUNO',
                'nascimento' => '2014-02-02',
            ],

            [
                'escola' => 'CE BARAO DE TINGUA',
                'municipio' => 'NOVA IGUAÇU',
                'regional' => 'METROPOLITANA I',
                'nome' => 'FILIPE RODRIGUES CARDOSO',
                'matricula' => '005FILIPE',
                'nascimento' => '2014-03-03',
            ],

            [
                'escola' => 'CE BARAO DE TINGUA',
                'municipio' => 'NOVA IGUAÇU',
                'regional' => 'METROPOLITANA I',
                'nome' => 'BRUNO MASQUIO - TESTE',
                'matricula' => '007BRUNO',
                'nascimento' => '2014-03-03',
            ],

            [
                'escola' => 'CE BARAO DE TINGUA',
                'municipio' => 'NOVA IGUAÇU',
                'regional' => 'METROPOLITANA I',
                'nome' => 'ORLANDO - TESTE',
                'matricula' => '008ORLANDO',
                'nascimento' => '2014-03-03',
            ],
        ]);
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->getData()->each(function ($record) {
            if (!Seeduc::where('matricula', $record['matricula'])->first()) {
                Seeduc::create($record);
                $this->info(sprintf('created: %s - %s', $record['nome'], $record['matricula']));
            }
        });
    }
}
