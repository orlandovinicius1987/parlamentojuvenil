<?php

namespace App\Http\Controllers;

use App\Data\Repositories\Data;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller extends BaseController
{
    use DispatchesJobs, ValidatesRequests;

	protected $redirectPath = '/dashboard';

    public function __construct(Data $dataRepository)
    {
        $this->dataRepository = $dataRepository;
    }

    /**
     * @param $force
     * @return mixed
     */
    public function buildView($view, $force = false)
    {
        return $this->dataRepository->buildViewData(view($view), $force);
    }
}
