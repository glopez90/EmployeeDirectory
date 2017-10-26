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
          'name' => 'Jazwares Admin',
          'email' => 'admin@jazwares.com',
          'password' => bcrypt('1vB2*uTcg4UZ'),
      ]);

      DB::table('users')->insert([
          'name' => 'Jazwares Guest',
          'email' => 'guest@jazwares.com',
          'password' => bcrypt('J@zEmp1010'),
      ]);
    }
}
