<?php

namespace Database\Seeders;

use App\Models\AnnounceDriver;
use Illuminate\Database\Seeder;

class AnnounceDriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AnnounceDriver::create([
            "first_name" => "Anas",
            "last_name" => "SAMII",
            "address" => "Ain chok",
            "contact_phone" => 18.94,
            "vehicule_type" => "moto",
            "image" => "test"
        ]);

        AnnounceDriver::create([
            "first_name" => "Oussama",
            "last_name" => "REDDAF",
            "address" => "Ouelfa",
            "contact_phone" => 90.187,
            "vehicule_type" => "car",
            "notes" => "Anything",
            "image" => "test"
        ]);
    }
}
