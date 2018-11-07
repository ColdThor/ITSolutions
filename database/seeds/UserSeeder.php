<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      DB::table('user')->insert([
          'first_name' => 'John',
          'last_name'  => 'Doe',
          'email' => 'johndoe@gmail.com',
          'password' => bcrypt('1234'),
          'telephone' => null,
          'id_user_group'=> 1
          ]);
    }
}
