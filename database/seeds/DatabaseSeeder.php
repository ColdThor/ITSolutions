<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(LocationSeeder::class);
        $this->call(UserGroupSeeder::class);
        $this->call(ConditionSeeder::class);
        $this->call(TypeSeeder::class);
        $this->call(SpecificationSeeder::class);

        $this->call(UserSeeder::class);
        $this->call(AdvertisementSeeder::class);

        Model::reguard();


    }
}
