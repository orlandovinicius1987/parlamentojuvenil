<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('lessthan18', function($attribute, $value, $parameters, $validator)
        {
            $birth = Carbon::createFromFormat('d/m/Y', $value);

            $end = Carbon::createFromFormat('d/m/Y', '20/11/2016');

            return $end->diffInYears($birth) < 18;
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
