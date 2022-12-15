<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "NYC Admin",
            "email" => "nyc.admin@gmail.com",
            "password" => bcrypt("password@123") // $2a$12$e7J6Us0c5AY6e7ryeDoV.ORa34qMgT18w2YmVh8jLP9gaPLDEwu5.

        ]);
    }
}
