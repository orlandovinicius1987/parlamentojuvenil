<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNewsTables extends Migration
{
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            // this will create an id, a "published" column, and soft delete and timestamps columns
            createDefaultTableFields($table);

            $table->string('title', 200)->nullable();
            $table->string('subtitle', 200)->nullable();
            $table->string('authors', 200)->nullable();
            $table->text('lead')->nullable();
            $table->text('body')->nullable();

            $table->timestamp('publish_start_date')->nullable();

            $table
                ->integer('position')
                ->unsigned()
                ->nullable();

            // add those 2 columns to enable publication timeframe fields (you can use publish_start_date only if you don't need to provide the ability to specify an end date)
            // $table->timestamp('publish_start_date')->nullable();
            // $table->timestamp('publish_end_date')->nullable();
        });

        Schema::create('news_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'news');
        });

        Schema::create('news_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'news');
        });
    }

    public function down()
    {
        Schema::dropIfExists('news_revisions');
        Schema::dropIfExists('news_slugs');
        Schema::dropIfExists('news');
    }
}
