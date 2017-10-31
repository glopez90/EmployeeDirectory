<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          'name' => 'Jazwares Guest',
          'email' => 'guest@jazwares.com',
          'password' => bcrypt('J@zEmp1010'),
      ]);
    }
}
