<?php

use App\Data\Entities\City;
use App\Data\Entities\School;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class SchoolsSeeder extends Seeder
{

	private $country;

	/**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->seedSchools();

        Model::reguard();
    }

	private function seedSchools()
	{
		School::truncate();

		$schools = $this->loadSchools();

		foreach ($schools as $school)
		{
			$parts = explode("\t", $school);

			School::create([
				'censo' => $parts[0],
				'ua' => $parts[1],
				'name' => $parts[2],
				'address' => $parts[3],
				'phone' => $parts[4],
				'city' => $parts[5],
				'city_id' => $this->findCityByName($parts[5])->id,
				'regional' => $parts[6],
			]);
		}
	}

	private function loadSchools()
	{
		$schools = file(__DIR__.DIRECTORY_SEPARATOR.'schools.txt');

		unset($schools[0]);

		return $schools;
	}

	private function findCityByName($city)
	{
		return City::where('name', '~*', $city)->first();
	}
}
