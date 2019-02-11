<?php

use Illuminate\Database\Seeder;
use App\Technologie;
class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Technologie::create([
            'name' => 'People',
        ]);
        Technologie::create([
            'name' => 'Animal',
        ]);
        Technologie::create([
            'name' => 'Sport',
        ]);
    }
}
