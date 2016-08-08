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
        $end = Carbon::createFromFormat('d/m/Y', '20/11/2016');

        Validator::extend('lessthan18', function($attribute, $value, $parameters, $validator) use ($end)
        {
            $birth = Carbon::createFromFormat('d/m/Y', $value);

            $diff = $end->diffInYears($birth);

            return $diff < 18;
        });

        Validator::extend('morethan13', function($attribute, $value, $parameters, $validator) use ($end)
        {
            $birth = Carbon::createFromFormat('d/m/Y', $value);

            $diff = $end->diffInYears($birth);

            return $diff > 13;
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
