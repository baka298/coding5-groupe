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
            'name' => 'Portela',
            'firstname' => 'Emanuel',
            'gsm' => '0470202020',
            'pays' => 'Belgique',
            'adresse' => 'Place de la Minoterie 10',
            'ville' => 'Bruxelles',
            'user_id' => 1,
            'dateDeNaissance' => '1996-05-03 00:00:00',
        ]);
        Profil::create([
            'name' => 'Van Driessche',
            'firstname' => 'Lucas',
            'gsm' => '0470202020',
            'pays' => 'Belgique',
            'adresse' => 'Place de la Minoterie 10',
            'ville' => 'Bruxelles',
            'user_id' => 2,
            'dateDeNaissance' => '1996-05-03 00:00:00',
        ]);
    }
}
