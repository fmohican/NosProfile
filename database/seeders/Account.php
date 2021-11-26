<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class Account  extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $servers = [
            [
                "International - 2",
                "INT-2",
            ],
            [
                "International - 1",
                "INT-1",
            ],
            [
                "Cylloan",
                "US-1"
            ],
            [
                "NosCitadel",
                "UK-1"
            ],
        ];
        foreach($servers as $data) {
            User::create([
                "name" => $data[0],

            ]);
        }
    }
}
