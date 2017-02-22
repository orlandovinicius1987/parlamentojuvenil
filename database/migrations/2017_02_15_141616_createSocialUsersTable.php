<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_users', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('social_network_id')->unsigned();
            $table->string('social_network_user_id');
            $table->json('data')->nullable();
            $table->softDeletes();
        });

        Schema::table('social_users', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('social_network_id')->references('id')->on('social_networks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('social_users');
    }
}
