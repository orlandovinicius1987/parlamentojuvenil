<?php

use Illuminate\Database\Seeder;

class SocialNetworkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('social_networks')->insert(['name' => 'facebook', 'slug' => 'Facebook']);
        DB::table('social_networks')->insert(['name' => 'twitter', 'slug' => 'Twitter']);
        DB::table('social_networks')->insert(['name' => 'youtube', 'slug' => 'Youtube']);
        DB::table('social_networks')->insert(['name' => 'linkedin', 'slug' => 'Linkedin']);
        DB::table('social_networks')->insert(['name' => 'instagram', 'slug' => 'Instagram']);
    }
}
