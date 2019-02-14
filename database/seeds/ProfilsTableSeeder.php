<?php

use Illuminate\Database\Seeder;
use App\Profil;

class ProfilsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profil::create([
            'nom' => 'Molengeek',
            'prenom' => 'Mister',
            'image' => '',
        ]);
        Profil::create([
           
            'nom' => 'Younes',
            'prenom' => 'Lol',
            'image' => '',
        ]);
        Profil::create([
           
            'nom' => 'Mimo',
            'prenom' => 'Momo',
            'image' => '',
        ]);
    }
}
