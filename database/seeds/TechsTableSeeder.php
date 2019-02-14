<?php

use Illuminate\Database\Seeder;
use App\Tech;
class TechsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tech::create([
            'name' => 'base',
            'id' => '1',
        ]);
    }
}
