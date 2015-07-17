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
				'regional' => $parts[1],
				'city' => $parts[2],
				'city_id' => $this->findCityByName($parts[2])->id,
				'censo' => $parts[3],
				'name' => $parts[4],
				'address' => '', // $parts[3],
				'phone' => '', //$parts[4],
				'ua' => '', //$parts[1],
			]);
		}
	}

	private function loadSchools()
	{
		$schools = file(__DIR__.DIRECTORY_SEPARATOR.'schools.tsv');

		unset($schools[0]);

		return $schools;
	}

	private function findCityByName($city)
	{
		if ( ! $found = City::where('name', '~*', $city)->first())
		{
			dd($city);
		}

		return $found;
	}
}
