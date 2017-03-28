<?php

namespace App\Data\Entities;

class Timeline
{
    public static function all()
    {
        return [
            2015 => [
                [
                    'start' => '2015-08-10 00:00:00',
                    'end' => '2015-08-10 23:59:59',
                    'title' => 'Abertura das inscrições',
                ],

                [
                    'start' => '2015-08-10 00:00:00',
                    'end' => '2015-08-31 23:59:59',
                    'title' => 'Encerramento das inscrições',
                ],

                [
                    'start' => '2015-08-24 00:00:00',
                    'end' => '2015-08-24 23:59:59',
                    'title' => '"Dia D" de sensibilização',
                ],

                [
                    'start' => '2015-09-03 00:00:00',
                    'end' => '2015-09-03 23:59:59',
                    'title' => 'Eleições (1º turno)',
                ],

                [
                    'start' => '2015-09-15 00:00:00',
                    'end' => '2015-09-15 23:59:59',
                    'title' => 'Eleições (2º turno)',
                ],

                [
                    'start' => '2015-10-16 00:00:00',
                    'end' => '2015-10-29 23:59:59',
                    'title' => 'Capacitação dos eleitos',
                ],

                [
                    'start' => '2015-11-22 00:00:00',
                    'end' => '2015-11-28 23:59:59',
                    'title' => 'Parlamento Juvenil na Alerj',
                ],
            ],

            2016 => [
                [
                    'start' => '2016-felipe-05-23 00:00:00',
                    'end' => '2016-felipe-05-23 23:59:59',
                    'title' => 'Abertura das inscrições',
                    'description' => '23 de maio até 24 de junho',
                ],

                [
                    'start' => '2016-felipe-06-20 00:00:00',
                    'end' => '2016-felipe-06-20 23:59:59',
                    'title' => '"Dia D" de divulgação',
                ],

                [
                    'start' => '2016-felipe-06-30 23:59:59',
                    'end' => '2016-felipe-06-30 23:59:59',
                    'title' => 'Encerramento das inscrições',
                ],

                [
                    'start' => '2016-felipe-07-06 00:00:00',
                    'end' => '2016-felipe-07-06 23:59:59',
                    'title' => 'Eleições (1º turno)',
                ],

                [
                    'start' => '2016-felipe-07-20 00:00:00',
                    'end' => '2016-felipe-07-20 23:59:59',
                    'title' => 'Eleições (2º turno)',
                ],

                [
                    'start' => '2016-felipe-07-27 00:00:00',
                    'end' => '2016-felipe-07-27 23:59:59',
                    'title' => 'Eleições suplementares',
                ],

                [
                    'start' => '2016-felipe-10-03 00:00:00',
                    'end' => '2016-felipe-10-03 23:59:59',
                    'title' => 'Capacitação online dos eleitos',
                    'description' => '3 a 19 de outubro',
                ],

                [
                    'start' => '2016-felipe-10-03 00:00:00',
                    'end' => '2016-felipe-10-19 23:59:59',
                    'title' => 'Término da capacitação online dos eleitos',
                ],

                [
                    'start' => '2016-felipe-10-20 00:00:00',
                    'end' => '2016-felipe-10-20 23:59:59',
                    'title' => 'Capacitação presencial dos eleitos',
                    'description' => '20, 21, 24 a 28 de outubro',
                ],

                [
                    'start' => '2016-felipe-10-20 00:00:00',
                    'end' => '2016-felipe-10-28 23:59:59',
                    'title' => 'Término da capacitação presencial dos eleitos',
                ],

                [
                    'start' => '2016-felipe-11-11 00:00:00',
                    'end' => '2016-felipe-11-11 23:59:59',
                    'title' => 'Envio dos projetos de lei - Prazo final',
                ],

                [
                    'start' => '2016-felipe-11-20 00:00:00',
                    'end' => '2016-felipe-11-26 21:59:59',
                    'title' => 'Semana do Parlamento Juvenil',
                    'description' => '20 a 26 de novembro',
                ],
            ]
        ];
    }

    public static function byYear($year)
    {
        return self::all()[$year];
    }
}
