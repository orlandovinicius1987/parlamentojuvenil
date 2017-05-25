<?php

namespace App\Data\Entities;

class Color
{
    protected static $availableColors = [];

    public function __construct()
    {
        static::$availableColors = static::byYear();
    }

    public static function all()
    {
        return collect([
            2017 => [
                [
                    'name' => 'rouge',
                    'color' => '#A54686',
                ],
                [
                    'name' => 'violet-red',
                    'color' => '#BC1C91',
                ],
                [
                    'name' => 'torch-red',
                    'color' => '#FF141E',
                ],
                [
                    'name' => 'ecstasy-orange',
                    'color' => '#F58220',
                ],
                [
                    'name' => 'supernova-yellow',
                    'color' => '#FFCA00',
                ],
                [
                    'name' => 'turbo-yellow',
                    'color' => '#FFF000',
                ],
                [
                    'name' => 'haze-green',
                    'color' => '#00A648',
                ],
                [
                    'name' => 'lima-green',
                    'color' => '#91CE18',
                ],
                [
                    'name' => 'cerulean-blue',
                    'color' => '#0094DB',
                ],
                [
                    'name' => 'danube-blue',
                    'color' => '#5A8BC9',
                ],
                [
                    'name' => 'endeavour-blue',
                    'color' => '#0060AE',
                ],
                [
                    'name' => 'jacksons-purple',
                    'color' => '#292C95',
                ],
            ],
        ]);
    }

    public static function byYear($year = null)
    {
        return collect(self::all()[$year ?: get_current_year()]);
    }

    private static function fillAvailableColors()
    {
        if (collect(static::$availableColors)->count() == 0) {
            static::$availableColors = static::byYear()->shuffle();
        }
    }

    public static function random()
    {
        static::fillAvailableColors();

        return static::$availableColors->pop();
    }
}
