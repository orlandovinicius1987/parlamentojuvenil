<?php

namespace App\Data\Repositories;

use \DB;
use Carbon\Carbon;
use App\Jobs\SyncNews;
use App\Jobs\SyncGallery;
use App\Data\Entities\State;
use App\Data\Entities\Article;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Bus\DispatchesJobs;
use App\Services\News\Service as SyncNewsService;
use App\Services\Filesystem\Service as Filesystem;
use Illuminate\Support\Collection as IlluminateCollection;

class Data
{
    use DispatchesJobs;

    /**
     * @var \App\Services\Filesystem\Service
     */
    private $filesystem;

    /**
     * @var SyncNewsService
     */
    private $syncNewsService;

    private $spreadsheet = 'https://docs.google.com/a/antoniocarlosribeiro.com/spreadsheets/d/1wrR7y4qk2ofj4kPgkhyPVBjwSohh8k1J6drsZ3bGzic/edit?usp=sharing';

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

    public function __construct(Filesystem $filesystem, SyncNewsService $syncNewsService)
    {
        $this->filesystem = $filesystem;
        $this->syncNewsService = $syncNewsService;
    }

    public function getSchedule($year)
    {
        return new IlluminateCollection($this->schedule[$year]);
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

        if (count($usedBanners) >= $banners->count())
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

    public function buildViewData($view, $force = false)
    {
        $this->dispatch(new SyncNews());
        $this->dispatch(new SyncGallery());

        header('X-Frame-Options: GOFORIT');

        $fourteenDate = (new Carbon())->subYears(14);
        $seventeenDate = (new Carbon())->subYears(18)->addDays(1);

        return  $view->with('banner_file', $this->selectBanner())
                    ->with('spreadsheet', $this->spreadsheet)
                    ->with('congressmen', $this->getCongressmenLinks())
                    ->with('carrousel', $this->getTestimonials())
                    ->with('cities', $this->getCities())
                    ->with('newspapers', $this->getNewspapersLinks())
                    ->with('gallery', $this->getGalleryLinks(9))
                    ->with('oldGallery', $this->getGalleryLinks(8))
                    ->with('oldArticles', $this->getArticles('<=', 2014))
                    ->with('newArticles', $this->getArticles('>=', 2015))
                    ->with('fourteenDate', $fourteenDate->format('d/m/Y'))
                    ->with('seventeenDate', $seventeenDate->format('d/m/Y'))
                    ->with('now', (string) Carbon::now()->subHours(3))
                    ->with('force', $force);
    }

    private function getCongressmenLinks()
    {
        $from7 = $this->filesystem->congressmenLinks(env('PHOTOS_DIR').DIRECTORY_SEPARATOR.'7a edicao (2013)');

        $from8 = $this->filesystem->congressmenLinks(env('PHOTOS_DIR').DIRECTORY_SEPARATOR.'8a edicao (2014)');

        /// will be sorted
        //		shuffle($from7);
        //		shuffle($from8);

        return [
            7 => $from7,
            8 => $from8,
        ];
    }

    private function getCities()
    {
        return State::where('code', 'RJ')->first()->cities()->orderBy('name')->get();
    }

    private function getNewspapersLinks()
    {
        $files = $this->filesystem->allLinks(env('NEWSPAPERS_DIR'));
        $links = $files['links'];
        $files = $files['files'];
        $result = [];

        foreach ($links as $key => $file)
        {
            $parts = pathinfo($file);

            if ($parts['extension'] == 'pdf' || $parts['extension'] == 'json')
            {
                $name = explode('_', $parts['filename']);

                $link = $this->makeLinkAttributes($files[$key], $name, $parts);

                $result[$key] = $link;
            }
        }

        return $result;
    }

    private function getArticles($operand, $year)
    {
        return $this->getArticlesForType($operand, $year, 'Notícias');
    }

    private function getGalleryLinks($edition)
    {
        return $this->getArticlesForType(null, null, 'Fotos', $edition);
    }

    private function getTestimonials()
    {
        $file = file(public_path('files/apps/parlamentojuvenil/parlamentares/testemunhos-parlamentares-juvenis.txt'));

        shuffle($file);

        $result = [];

        foreach ($file as $person)
        {
            $person = explode(';', $person);

            $city = pathinfo($person[1]);

            $city = explode('-', $city['filename']);

            $result[] = [
                'name' => $person[0],
                'photo' => url(
                    env('LOCAL_BASE_DIR') . DIRECTORY_SEPARATOR .
                    env('BASE_DIR') . DIRECTORY_SEPARATOR .
                    env('PHOTOS_DIR') . DIRECTORY_SEPARATOR .
                    $person[1]
                ),
                'editions' => $person[2],
                'city' => trim($city[1]),
                'testimonial' => $person[3],
            ];
        }

        return $result;
    }

    /**
     * @param $operand
     * @param $year
     * @return mixed
     */
    private function getArticlesForType($operand, $year, $type, $edition = null)
    {
        $articles = Article::orderBy('published_at', 'descending')->where('type', $type);

        if ($year)
        {
            $articles->where(DB::raw('extract(year from published_at)'), $operand, $year);
        }

        if ($edition)
        {
            $articles->where('edition', $edition);
        }

        foreach ($articles = $articles->get() as $article)
        {
            if ($article->image)
            {
                $article->image = env('ARTICLE_IMAGE_URL_BASE') . DIRECTORY_SEPARATOR . $article->image;
                $article->date = Carbon::createFromFormat('Y-m-d', $article->date)->format('d m Y');
            }
        }

        return $articles;
    }

    private function makeLinkAttributes($file, $name, $parts)
    {
        $url = null;
        $pdf = null;

        if ($parts['extension'] == 'json')
        {
            $json = file_get_contents($file);

            $json = json_decode($json);

            $url = $json->url;
        }
        else
        {
            $pdf = $parts['dirname'] . '/' . $parts['filename'] . '.pdf';
        }

        $name = isset($name[2]) ? $name[1] . ' ' . $name[2] : $name[0];

        return [
            'year' => $name[0],
            'name' => $name,
            'pdf' => $pdf,
            'jpg' => $parts['dirname'] . '/' . $parts['filename'] . '.jpg',
            'url' => $url
        ];
    }
}
