<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'manu',
            'email' => 'manu@gmail.com',
            'password' => bcrypt('manumanu'),
        ]);
        factory(App\User::class, 5)->create();
    }
}
