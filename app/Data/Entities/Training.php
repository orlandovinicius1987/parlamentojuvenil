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
                    'title' => '01 - Introdução aos Poderes Constituídose ao Processo Legislativo',
                    'type' => 'document',
                    'lead' => 'Consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. Aliquam in felis sit amet augue.',
                    'thumb-url' => '/pj2016/images/capacitacao/apostila01.jpg',
                    'video-url' => 'https://www.youtube.com/embed/c-H6p0UFHPo',
                    'document-url' => '/public/files/apps/parlamentojuvenil/site/2016/capacitation/ApresentacaoParlamentoJuvenil 2016-ParteI.odp',
                ],

                [
                    'id' => 'training.document.2016.2',
                    'title' => '02 - Introdução à Técnica Legislativa',
                    'type' => 'document',
                    'lead' => 'Consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. Aliquam in felis sit amet augue.',
                    'thumb-url' => '/pj2016/images/capacitacao/apostila02.jpg',
                    'video-url' => 'https://www.youtube.com/embed/c-H6p0UFHPo',
                    'document-url' => '/public/files/apps/parlamentojuvenil/site/2016/capacitation/ApresentacaoParlamentoJuvenil 2016-ParteII.odp',
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
