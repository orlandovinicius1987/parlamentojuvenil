<?php

namespace App\Data\Entities;

class Training
{
    public static function all()
    {
        return [
            2016 => [
                [
                    'id' => '2016.1',
                    'title' => 'Título do vídeo sobre a capacitação 1',
                    'type' => 'video',
                    'lead' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. Aliquam in felis sit amet augue.',
                    'thumb-url' => 'http://placekitten.com/408/287.',
                    'video-url' => 'https://www.youtube.com/watch?v=c-H6p0UFHPo',
                    'document-url' => 'http://placekitten.com/408/287.',
                ],
            ],
        ];
    }

    public static function byYear($year)
    {
        $values = self::all()[$year];

        foreach ($values as $key => $value)
        {
            $values[$key]['year'] = $year;
        }

        return $values;
    }
}
