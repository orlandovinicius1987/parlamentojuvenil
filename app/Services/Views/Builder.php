<?php

namespace App\Services\Views;

use \DB;
use Carbon\Carbon;
use App\Data\Entities\State;
use App\Data\Entities\School;
use App\Data\Entities\Article;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Bus\DispatchesJobs;
use App\Services\Filesystem\Service as Filesystem;
use Illuminate\Support\Collection as IlluminateCollection;

class Builder
{
    use DispatchesJobs;

    /**
     * @var \App\Services\Filesystem\Service
     */
    private $filesystem;

    public $spreadsheet = 'https://docs.google.com/a/antoniocarlosribeiro.com/spreadsheets/d/1wrR7y4qk2ofj4kPgkhyPVBjwSohh8k1J6drsZ3bGzic/edit?usp=sharing';

    public function __construct(Filesystem $filesystem)
    {
        $this->filesystem = $filesystem;
    }

    public function buildViewData($view, $force = false, $isHome = false)
    {
        header('X-Frame-Options: GOFORIT');

        $fourteenDate = (new Carbon())->subYears(14);
        $seventeenDate = (new Carbon())->subYears(18)->addDays(1);

        $banner = $this->execute(function() { return $this->selectBanner(); }, 'selectBanner');

        $congressmenLinks = $this->execute(function() { return $this->getCongressmenLinks(); }, 'getCongressmenLinks');

        $testimonials = $this->execute(function() { return $this->getTestimonials(); }, 'getTestimonials');

        $cities = $this->execute(function() { return $this->getCities(); }, 'getCities');

        $newspapersLinks = $this->execute(function() { return $this->getNewspapersLinks(); }, 'getNewspapersLinks');

        $galleryLinks9 = $this->execute(function() { return $this->getGalleryLinks(9); }, 'getGalleryLinks');

        $galleryLinks8 = $this->execute(function() { return $this->getGalleryLinks(8); }, 'getGalleryLinks');

        $articles2014 = $this->execute(function() { return $this->getArticles('<=', 2014); }, 'getArticles');

        $articles2015 = $this->execute(function() { return $this->getArticles('>=', 2015); }, 'getArticles');

        $fourteenDateString = $this->execute(function() use ($fourteenDate) { return $fourteenDate->format('d/m/Y'); }, 'fourteenDate');

        $seventeenDateString = $this->execute(function() use ($seventeenDate) { return $seventeenDate->format('d/m/Y'); }, 'seventeenDate');

        $now = $this->execute(function() { return (string) Carbon::now()->subHours(3); }, 'now');

        return  $view->with('banner_file', $banner)
                     ->with('spreadsheet', $this->spreadsheet)
                     ->with('congressmen', $congressmenLinks)
                     ->with('carrousel', $testimonials)
                     ->with('cities', $cities)
                     ->with('newspapers', $newspapersLinks)
                     ->with('gallery', $galleryLinks9)
                     ->with('oldGallery', $galleryLinks8)
                     ->with('oldArticles', $articles2014)
                     ->with('newArticles', $articles2015)
                     ->with('fourteenDate', $fourteenDateString)
                     ->with('seventeenDate', $seventeenDateString)
                     ->with('now', $now)
                     ->with('isHome', $isHome)
                     ->with('force', $force);
    }

    private function execute($function, $name)
    {
        $time_pre = microtime(true);
        $result = $function();
        $time_post = microtime(true);
        $exec_time = $time_post - $time_pre;

        \Log::info($name . ': ' . $exec_time);

        return $result;
    }

    public function getCongressmenLinks()
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

    public function getCities()
    {
        return State::where('code', 'RJ')->first()->cities()->orderBy('name')->get();
    }

    public function getNewspapersLinks()
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

    public function getArticles($operand, $year)
    {
        return $this->getArticlesForType($operand, $year, 'Notícias');
    }

    public function getGalleryLinks($edition)
    {
        return $this->getArticlesForType(null, null, 'Fotos', $edition);
    }

    public function getTestimonials()
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

    public function makeLinkAttributes($file, $name, $parts)
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

    /**
     * @param $operand
     * @param $year
     * @return mixed
     */
    public function getArticlesForType($operand, $year, $type, $edition = null)
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

    public function getSchoolsForCity($city)
    {
        return School::where('city', 'like', DB::raw("UPPER('".$city."')"))->get();
    }
}
