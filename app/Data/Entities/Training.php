<?php

namespace App\Data\Entities;

use Illuminate\Support\Collection;

class Training
{
    public static function find($id)
    {
        return static::all()->where('id', $id)->first();
    }

    public static function all()
    {
        return Collection::make([
            2016 => [
                [
                    'id' => 'training.video.2016.1',
                    'title' => 'Título do vídeo sobre a capacitação 1',
                    'type' => 'video',
                    'lead' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. Aliquam in felis sit amet augue.',
                    'thumb-url' => 'http://placekitten.com/408/287',
                    'video-url' => 'https://www.youtube.com/embed/c-H6p0UFHPo',
                    'document-url' => 'http://placekitten.com/408/287',
                ],

                [
                    'id' => 'training.video.2016.2',
                    'title' => 'Título do vídeo sobre a capacitação 1',
                    'type' => 'video',
                    'lead' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. Aliquam in felis sit amet augue.',
                    'thumb-url' => 'http://placekitten.com/408/287',
                    'video-url' => 'https://www.youtube.com/embed/c-H6p0UFHPo',
                    'document-url' => 'http://placekitten.com/408/287',
                ],

                [
                    'id' => 'training.document.2016.1',
                    'title' => 'PDF de capacitação 01',
                    'type' => 'document',
                    'lead' => 'Consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. Aliquam in felis sit amet augue.',
                    'thumb-url' => 'http://placekitten.com/408/287?x=1',
                    'video-url' => 'https://www.youtube.com/embed/c-H6p0UFHPo',
                    'document-url' => 'http://gdlp01.c-wss.com/gds/6/0300003266/01/PSSD1300IS_IXUS105IS_CUG_EN.pdf',
                ],

                [
                    'id' => 'training.document.2016.2',
                    'title' => 'PDF de capacitação 01',
                    'type' => 'document',
                    'lead' => 'Consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. Aliquam in felis sit amet augue.',
                    'thumb-url' => 'http://placekitten.com/408/287?x=1',
                    'video-url' => 'https://www.youtube.com/embed/c-H6p0UFHPo',
                    'document-url' => 'http://gdlp01.c-wss.com/gds/6/0300003266/01/PSSD1300IS_IXUS105IS_CUG_EN.pdf',
                ],

                [
                    'id' => 'training.document.2016.3',
                    'title' => 'PDF de capacitação 01',
                    'type' => 'document',
                    'lead' => 'Consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. Aliquam in felis sit amet augue.',
                    'thumb-url' => 'http://placekitten.com/408/287?x=1',
                    'video-url' => 'https://www.youtube.com/embed/c-H6p0UFHPo',
                    'document-url' => 'http://gdlp01.c-wss.com/gds/6/0300003266/01/PSSD1300IS_IXUS105IS_CUG_EN.pdf',
                ],
            ],
        ]);
    }

    public static function byYear($year)
    {
        $values = self::all()[2016];

        foreach ($values as $key => $value)
        {
            $values[$key]['year'] = $year;
        }

        return Collection::make($values);
    }
}
