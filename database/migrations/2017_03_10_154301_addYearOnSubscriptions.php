<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddYearOnSubscriptions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('subscriptions', function (Blueprint $table){
         $table->integer('year')->nullable();
      });

        DB::table('subscriptions')->update(['year' => 2016]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subscriptions', function(Blueprint $table)
        {
            $table->dropColumn('year');
        });
    }
}
