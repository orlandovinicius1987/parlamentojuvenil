<?php

namespace App\Http\Controllers;

use App\Twill\Capsules\News\Models\News as NewsModel;
use App\Twill\Capsules\News\Repositories\NewsRepository;
use App\Http\Controllers\Controller as BaseController;

class News extends BaseController
{
    private $newsRepository;

    public function __construct(NewsRepository $newsRepository)
    {
        $this->newsRepository = $newsRepository;
    }

    public function index()
    {
        return view(get_current_year() . '.news.index')->with([
            'news' => $this->newsRepository->all(),
        ]);
    }

    public function show($id)
    {
        return view(get_current_year() . '.news.show')->with([
            'new' => NewsModel::findOrFail($id),
        ]);
    }
}
