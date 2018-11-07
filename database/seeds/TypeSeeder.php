<?php

use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type')->insert([
            ['title' => 'Predaj'],
            ['title' => 'Prenájom'],
            ['title' => 'Kúpa'],
            ['title' => 'Podnájom'],
            ['title' => 'Výmena'],
            ['title' => 'Dražba']
        ]);
    }
}
