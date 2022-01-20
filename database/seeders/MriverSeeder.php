<?php

namespace Database\Seeders;

use App\Models\Mriver;
use Illuminate\Database\Seeder;

class MriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mriver::create([
            "userName" => "Anas",
            "email" => "SAMII",
            "cin" => "Ain chok",
            "password" => "Maarif",
            "address" => "hfjxf",
            "city" => "Bag",
            "postalCode" => "test"
        ]);

        Mriver::create([
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
