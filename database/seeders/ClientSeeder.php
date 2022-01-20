<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::create([
            "userName" => "Anas",
            "email" => "SAMII",
            "cin" => "Ain chok",
            "password" => "Maarif",
            "address" => "hfjxf",
            "city" => "Bag",
            "postalCode" => "test"
        ]);

        Client::create([
            "userName" => "Anas",
            "email" => "SAMII",
            "cin" => "Ain chok",
            "password" => "Maarif",
            "address" => "hdfu",
            "city" => "Bag",
            "postalCode" => "test"
        ]);
    }
}
