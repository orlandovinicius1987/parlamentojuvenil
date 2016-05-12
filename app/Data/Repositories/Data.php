<?php

namespace App\Data\Repositories;

use Illuminate\Support\Collection as IlluminateCollection;
use Illuminate\Support\Facades\Session;

class Data
{
    public $schedule = [
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
                'start' => '2016-05-23 00:00:00',
                'end' => '2016-05-23 23:59:59',
                'title' => 'Abertura das inscrições',
                'description' => '23 de maio até 24 de junho',
            ],

            [
                'start' => '2016-05-23 00:00:00',
                'end' => '2016-06-24 23:59:59',
                'title' => 'Encerramento das inscrições',
            ],

            [
                'start' => '2016-06-20 00:00:00',
                'end' => '2016-06-20 23:59:59',
                'title' => '"Dia D" de divulgação',
            ],

            [
                'start' => '2016-07-06 00:00:00',
                'end' => '2016-07-06 23:59:59',
                'title' => 'Eleições (1º turno)',
            ],

            [
                'start' => '2016-07-20 00:00:00',
                'end' => '2016-07-20 23:59:59',
                'title' => 'Eleições (2º turno)',
            ],

            [
                'start' => '2016-07-27 00:00:00',
                'end' => '2016-07-27 23:59:59',
                'title' => 'Eleições suplementares',
            ],

            [
                'start' => '2016-10-03 00:00:00',
                'end' => '2016-10-03 23:59:59',
                'title' => 'Capacitação online dos eleitos',
                'description' => '3 a 19 de outubro',
            ],

            [
                'start' => '2016-10-03 00:00:00',
                'end' => '2016-10-19 23:59:59',
                'title' => 'Término da capacitação online dos eleitos',
            ],

            [
                'start' => '2016-10-20 00:00:00',
                'end' => '2016-10-20 23:59:59',
                'title' => 'Capacitação presencial dos eleitos',
                'description' => '20, 21, 24 a 28 de outubro',
            ],

            [
                'start' => '2016-10-20 00:00:00',
                'end' => '2016-10-28 23:59:59',
                'title' => 'Término da capacitação presencial dos eleitos',
            ],

            [
                'start' => '2016-11-22 00:00:00',
                'end' => '2016-11-28 23:59:59',
                'title' => 'Parlamento Juvenil na Alerj',
            ],

            [
                'start' => '2016-11-11 00:00:00',
                'end' => '2016-11-11 23:59:59',
                'title' => 'Envio dos projetos de lei - Prazo final',
            ],

            [
                'start' => '2016-11-20 00:00:00',
                'end' => '2016-11-26 23:59:59',
                'title' => 'Semana do Parlamento Juvenil',
                'description' => '20 a 26 de novembro',
            ],
        ]

    ];

    public function getSchedule($year)
    {
        return new Collection($this->schedule[$year]);
    }

    public function selectBanner()
    {
        $banners = new IlluminateCollection([
            'banners/parlamentares/bg_fotos01.jpg',
            'banners/parlamentares/bg_fotos02.jpg',
            'banners/parlamentares/bg_fotos03.jpg',
            'banners/parlamentares/bg_fotos04.jpg',
            'banners/parlamentares/bg_fotos05.jpg',
            'banners/parlamentares/bg_fotos06.jpg',
            'banners/parlamentares/bg_fotos07.jpg',
            'banners/parlamentares/bg_fotos08.jpg',
            'banners/parlamentares/bg_fotos09.jpg',
            'banners/parlamentares/bg_fotos10.jpg',
        ]);

        $usedBanners = Session::get('used_banners') ?: [];

        if ($banners->count() == count($usedBanners))
        {
            $usedBanners = [];
        }

        $usedBanners = new IlluminateCollection($usedBanners);

        while (true)
        {
            $banner = $banners->random();

            if (! $usedBanners->contains($banner))
            {
                break;
            }
        }

        $usedBanners->put(null, $banner);

        Session::put('used_banners', $usedBanners->toArray());

        return $banner;
    }
}
