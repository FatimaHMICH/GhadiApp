<?php

namespace Database\Seeders;

use App\Models\AnnounceClient;
use Illuminate\Database\Seeder;

class AnnounceClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AnnounceClient::create([
            "first_name" => "Anas",
            "last_name" => "SAMII",
            "starting_address" => "Ain chok",
            "arrival_address" => "Maarif",
            "contact_phone" => 648195720,
            "luggage_type" => "Bag",
            "image" => "test"
        ]);

        AnnounceClient::create([
            "first_name" => "Oussama",
            "last_name" => "REDDAF",
            "starting_address" => "Ouelfa",
            "arrival_address" => "Maarif",
            "contact_phone" => 661846088,
            "luggage_type" => "Bag",
            "notes" => "Anything",
            "image" => "test"
        ]);
    }
}
