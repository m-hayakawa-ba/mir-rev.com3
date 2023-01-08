<?php

namespace Database\Seeders;

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
        $this->call(GameStatusSeeder::class);
        $this->call(LinkTypeSeeder::class);
        $this->call(GameSeeder::class);
        $this->call(LinkSeeder::class);
        $this->call(HistorySeeder::class);
    }
}
