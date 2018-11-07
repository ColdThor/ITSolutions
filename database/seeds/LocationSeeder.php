<?php

use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('location')->insert([
            ['region' => 'Nitriansky kraj'],
            ['region' => 'Bratislavský kraj'],
            ['region' => 'Banskobystrický kraj'],
            ['region' => 'Trnavský kraj'],
            ['region' => 'Trenčiansky kraj'],
            ['region' => 'Źilinský kraj'],
            ['region' => 'Prešovský kraj'],
            ['region' => 'Košický kraj']
        ]);


    }
}
