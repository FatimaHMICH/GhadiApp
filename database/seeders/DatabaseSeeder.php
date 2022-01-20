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
        $this->call(AnnounceClientSeeder::class);
        $this->call(AnnounceDriverSeeder::class);
        $this->call(ProfileSeeder::class);
        $this->call(ClientSeeder::class);

        $this->call(MriverSeeder::class);
    }
}
