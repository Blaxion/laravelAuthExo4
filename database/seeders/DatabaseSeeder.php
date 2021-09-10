<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            ['rank' => 'member'],
            ['rank' => 'admin']
        ]);
        DB::table('users')->insert([

            [
                'name' => "admin",
                'firstname' => "admin",
                'age' => 20,
                'adress' => 'maison admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => now(),
                'role_id' => 2,
                'password' => bcrypt('laravel'),
                'remember_token' => Str::random(10)
            ],
            [
                'name' => "membre",
                'firstname' => "membre",
                'age' => 10,
                'adress' => 'maison membre',
                'email' => 'membre@membre.com',
                'email_verified_at' => now(),
                'role_id' => 1,
                'password' => bcrypt('laravel'),
                'remember_token' => Str::random(10)
            ]

        ]);
    }
}
