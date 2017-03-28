<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBirthDateAndRegistrationInUsers extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table)
        {
            $table->string('registration')->nullable();  // temporariamente 'nullable' RETIRAR
            $table->string('birthdate')->nullable();  // temporariamente 'nullable'   RETIRAR
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $table)
        {
            $table->dropColumn('registration', 'birthdate');
        });
    }
}
