<?php

namespace App\Data\Repositories;

use DB;
use App\Data\Entities\City;
use App\Data\Entities\School;
use App\Data\Entities\Student;

class Cities
{
    public function fixCities()
    {
        DB::transaction(function () {
            City::where('name', 'PARATI')->update(['name' => 'PARATY']);

            School::where('city', 'PARATI')->update(['city' => 'PARATY']);

            Student::where('city', 'PARATI')->update(['city' => 'PARATY']);
        });
    }
}
