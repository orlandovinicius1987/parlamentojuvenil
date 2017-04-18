<?php

use App\Data\Entities\City;
use \DB as Database;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\PostgresConnection;

class CreateUnaccent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {
            City::findCityByname('RIO');
        } catch (\Exception $exception) {
            if (Database::connection() instanceof PostgresConnection) {
                Database::statement('CREATE EXTENSION unaccent;');
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
