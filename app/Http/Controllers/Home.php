<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use App\Services\Instagram;

class Home extends BaseController
{
    public function force()
    {
        return $this->index(null, true);
    }

    public function index($year = null, $force = false)
    {
        return $this->buildView(
            'home.index',
            get_current_year($year),
            null,
            true
        )->with('instagramPictures', app(Instagram::class)->getImagesUrl(12));
    }

    public function howItWorks($year = null, $force = false)
    {
        return $this->buildView(
            'home.partials.howitworks',
            get_current_year($year),
            null,
            true
        )->with('instagramPictures', app(Instagram::class)->getImagesUrl(12));
    }
    public function about($year = null, $force = false)
    {
        return $this->buildView(
            'home.partials.about',
            get_current_year($year),
            null,
            true
        )->with('instagramPictures', app(Instagram::class)->getImagesUrl(12));
    }

    public function coach($year = null, $force = false)
    {
        return $this->buildView(
            'home.partials.coach',
            get_current_year($year),
            null,
            true
        )->with('instagramPictures', app(Instagram::class)->getImagesUrl(12));
    }
}
