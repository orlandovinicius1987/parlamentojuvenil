<?php

namespace App\Data\Entities;

class Clipping
{
    public static function all()
    {
        return [
            2014 => [
                [
                    'id' => 'nº292',
                    'title' => 'Poder jovem na Assembleia',
                    'lead' => 'Eles foram os donos da Assembleia Legislativa do Rio (Alerj) entre os dias 10 e 14 de novembro. Integrantes
da oitava edição do Parlamento Juvenil (PJ-Alerj), 83 jovens, 24 destes reeleitos, passaram uma semana no Palácio Tiradentes, discursaram, analisaram
projetos em comissão e votaram proposições, escolhendo três iniciativas que serão apreciadas pelo governador Luiz Fernando Pezão.',
                    'vehicle' => 'Jornal da Alerj',
                    'file' => '2014_Jornal da Alerj_no292',
                    'url' => '',
                ],
                [
                    'id' => '27/11/2014',
                    'title' => 'Valenciano no Parlamento Juvenil da Alerj',
                    'lead' => 'Um projeto pouco divulgado e conhecido na cidade, mas que já teve um representante valenciano. Esse é o Parlamento Juvenil da Alerj, que visa aprimorar a vida política estadual de estudantes do Rio de Janeiro. Em Valença, o jovem Yan Carlos dos Santos foi o representante em 2014.',
                    'vehicle' => 'Jornal Local',
                    'file' => '2014-11-27-jornal-local',
                    'url' => 'http://www.local.jor.br/noticias/ler/3466/valenciano-no-parlamento-juvenil-da-alerj',
                ],
                [
                    'id' => '12/11/2014',
                    'title' => 'Adolescentes experimentam rotina de deputado por uma semana na Alerj',
                    'lead' => '',
                    'vehicle' => 'O Globo RioD:\Projetos\parlamentojuvenil\public\files\apps\parlamentojuvenil\reportagens_edicoes_anteriores',
                    'file' => '',
                    'url' => 'http://globotv.globo.com/infoglobo/o-globo-rio/v/adolescentes-experimentam-rotina-de-deputado-por-uma-semana-na-alerj/3758857/',
                ],
            ],
            2015 => [
                [
                    'id' => '',
                    'title' => '',
                    'lead' => '',
                    'vehicle' => '',
                    'file' => '',
                    'url' => '',
                ],
                [
                    'id' => '',
                    'title' => '',
                    'lead' => '',
                    'vehicle' => '',
                    'file' => '',
                    'url' => '',
                ],
            ],
            2016 => [
                [
                    'id' => '',
                    'title' => '',
                    'lead' => '',
                    'vehicle' => '',
                    'file' => '',
                    'url' => '',
                ],
            ]
        ];
    }

    public static function byYear($year)
    {
        return self::all()[$year];
    }
}
