<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class Account  extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "Fmohican",
            "email" => "fmohican@example.com",
            "password" => Hash::make('admin'),
            "access" => 5,
        ]);
    }
}
