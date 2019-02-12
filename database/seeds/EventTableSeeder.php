<?php

use Illuminate\Database\Seeder;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            

            'start_date'     => now(),
            'end_date'    => now(),

            'start_hours'     => '17h25',
            'end_hours'     => '17h25',

            'lieu'     => 'Bruxelles',
            'title'     => 'Hackathon',
            'desc'     => 'Hackathon à Molengeek',





           
        ]);
    }
}
