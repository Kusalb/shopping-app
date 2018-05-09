<?php

use Illuminate\Database\Seeder;

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
            'name' => ('Kusal'),
            'email' => ('kusal@gmail.com'),
            'password' => bcrypt(10),
        ]);
    }
}
