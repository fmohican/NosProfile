<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class Server extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Server::create([
            "name" => "Fmohican",
            "email" => "fmohican@example.com",
            "password" => Hash::make('admin'),
            "access" => 5,
        ]);
    }
}
