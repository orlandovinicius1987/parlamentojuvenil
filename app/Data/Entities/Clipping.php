<?php

namespace App\Data\Entities;

class Clipping
{
    public static function all()
    {
        return [
            2015 => [
                [
                    'id' => '',
                    'title' => '',
                    'lead' => '',
                    'vehicle' => '',
                ],
            ],

            2016 => [
                [
                    'id' => '',
                    'title' => '',
                    'lead' => '',
                    'vehicle' => '',
                ],
            ]
        ];
    }

    public static function byYear($year)
    {
        return self::all()[$year];
    }
}
