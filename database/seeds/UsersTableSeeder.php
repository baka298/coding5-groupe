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
            'name' => 'xavier',
            'email' => 'xavier@hotmail.com',
            'password' => bcrypt('coding5'),
        ]);
    }
}
