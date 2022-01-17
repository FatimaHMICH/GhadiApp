<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::create([
            "name" =>"fatima",
            "username"=>"dddsdd",
            "addresse"=>"dddsdd",
            "photo"=>"jh.jpe",
            "city"=>"jh.jpe",
            "password"=>"jh.jpe",
            "phoneNumber"=>"jh.jpe",
            "email"=>"jh.jpe"
            

    ]);
    Profile::create([
        "name" =>"lalazaineb",
        "username"=>"dddsdd",
        "addresse"=>"dddsdd",
        "photo"=>"jh.jpe",
        "city"=>"jh.jpe",
        "password"=>"jh.jpe",
        "phoneNumber"=>"jh.jpe",
        "email"=>"jh.jpe"

]);
    }
}
