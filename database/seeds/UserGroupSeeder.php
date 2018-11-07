<?php

use Illuminate\Database\Seeder;

class UserGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_group')->insert([
            ['title' => 'registrovaný'],
            ['title' => 'neregistrovaný'],
            ['title' => 'realitka'],
            ['title' => 'admin']
        ]);

    }
}
