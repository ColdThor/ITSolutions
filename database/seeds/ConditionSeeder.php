<?php

use Illuminate\Database\Seeder;

class ConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('condition')->insert([
            ['title' => 'Novostavba'],
            ['title' => 'Čiastočná rekonštrukcia'],
            ['title' => 'Kompletná rekonštrukcia'],
            ['title' => 'Pôvodný stav'],
            ['title' => 'Vo výstavbe'],
            ['title' => 'Developerský projekt']
        ]);
    }
}
