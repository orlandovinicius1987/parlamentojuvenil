<?php

namespace App\Data\Repositories;

use App\Services\Views\Builder;
use Jenssegers\Date\Date as Carbon;
use App\Events\SubscriptionUpdated;
use App\Data\Entities\Subscription;
use App\Exceptions\AlreadySubscribed;
use App\Services\News\Service as SyncNewsService;
use Illuminate\Support\Collection as IlluminateCollection;

class Data
{
    /**
     * @var SyncNewsService
     */
    private $syncNewsService;

    public $timeline = [
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
                'end' => '2016-05-23 00:00:00',
                'title' => 'Abertura das inscrições',
                'description' => '23 de maio até 24 de junho',
            ],

            [
                'start' => '2016-06-24 23:59:59',
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
    /**
     * @var Builder
     */
    public $viewBuilder;

    public function __construct(SyncNewsService $syncNewsService, Builder $viewBuilder)
    {
        $this->syncNewsService = $syncNewsService;
        $this->viewBuilder = $viewBuilder;
    }

    public function getTimeline($year)
    {
        $timeline = $this->makeTimelineData($this->timeline[$year]);

        return new IlluminateCollection($timeline);
    }

    public function createSubscription($input)
    {
        $model = new Subscription();

        $input = $input->only($model->getFillable());

        if($subscription = $model->where($input)->first())
        {
            throw new AlreadySubscribed();
        }

        $subscription = Subscription::firstOrCreate($input);

        app('events')->fire(new SubscriptionUpdated($subscription));

        return $subscription;
    }

    private function makeTimelineData($timeline)
    {
        Carbon::setLocale('pt_BR');

        foreach ($timeline as $key => $item)
        {
            $start = Carbon::createFromFormat('Y-m-d H:i:s', $item['start']);
            $end = Carbon::createFromFormat('Y-m-d H:i:s', $item['end']);
            $end->addSeconds(2);

            $diff = $start->diffInDays($end);

            if ($diff <= 1)
            {
                $period = $start->format('d \\d\\e F');
            }
            else
            {
                if ($start->month == $end->month)
                {
                    $period = $start->format('d') . ' a ' . $end->format('d \\d\\e F');
                }
                else
                {
                    $period =
                        $start->format('d \\d\\e F') . ' a ' .
                        $end->format('d \\d\\e F');
                }
            }

            $timeline[$key]['period'] = $period;
        }

        return $timeline;
    }
}
