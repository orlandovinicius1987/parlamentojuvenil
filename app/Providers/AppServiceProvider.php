<?php

namespace App\Providers;

use App\Data\Entities\City;
use Carbon\Carbon;
use App\Services\SocialLogin\LoggedUser;
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
        $this->createValidators();
    }

    protected function instantiateLoggedUser()
    {
        $loggedUser = session('loggedUser') ?: new LoggedUser();

        app()->singleton('loggedUser', $loggedUser);

        app()->singleton(LoggedUser::class, $loggedUser);

        app()->instance(LoggedUser::class, $loggedUser);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->alias('bugsnag.logger', \Illuminate\Contracts\Logging\Log::class);
        $this->app->alias('bugsnag.logger', \Psr\Log\LoggerInterface::class);
        $this->instantiateLoggedUser();
    }

    protected function createValidators()
    {
        $end = Carbon::createFromFormat('d/m/Y', '20/11/2016');

        Validator::extend('lessthan18', function ($attribute, $value, $parameters, $validator) use ($end) {
            $birth = Carbon::createFromFormat('d/m/Y', $value);

            $diff = $end->diffInYears($birth);

            return $diff < 18;
        });

        Validator::extend('morethan13', function ($attribute, $value, $parameters, $validator) use ($end) {
            $birth = Carbon::createFromFormat('d/m/Y', $value);

            $diff = $end->diffInYears($birth);

            return $diff > 13;
        });

        Validator::extend('city', function ($attribute, $value, $parameters, $validator) {
            return City::findCityByname($value) instanceof City;
        });

        Validator::extend('birthdate', function ($attribute, $value, $parameters, $validator) {
            if (is_null($date = string_to_date($value))) {
                return false;
            }

            request()->merge(['birthdate' => $date->format('d/m/Y')]);

            return true;
        });
    }
}
