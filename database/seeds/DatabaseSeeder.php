<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      
        $this->call(NewslettersTableSeeder::class);
        $this->call(GalleriesTableSeeder::class);
        $this->call(FaqsTableSeeder::class);
    }
}
