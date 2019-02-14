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
            'email' => 'groupe4@molengeek.com',
            'password' => bcrypt('molengeek'),
            'role_id' => 1,
            'profil_id' => 1,
            'status' => 1,
        ]);
        User::create([
            'email' => 'younes@molengeek.com',
            'password' => bcrypt('molengeek'),
            'role_id' => 2,
            'profil_id' => 2,
            'status' => 1,
        ]);
        User::create([
            'email' => 'mimo@molengeek.com',
            'password' => bcrypt('molengeek'),
            'role_id' => 3,
            'profil_id' => 3,
            'status' => 1,
        ]);
    }
}
