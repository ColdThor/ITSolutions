<?php

use Illuminate\Database\Seeder;

class AdvertisementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('advertisement')->insert([
            ['title' => 'Super nový dom',
            'description' => 'Takéto nekúpite nikde inde',
                'date' => '2018-03-08',
                'contact_mail' => 'mail@gmail.com',
                'contact_phone' => '09110123456',
                'price' => 12000,
                'area' => 23,
                'views' => 0,
                'id_user' => 1,
                'id_condition' => 1,
                'id_type' => 1,
                'id_specification' => 1,
                'id_location' => 1],

        ]);
    }
}
