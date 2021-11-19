<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Server extends Seeder
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
            \App\Models\Server::create([
                "name" => $data[0],
                "short" => $data[1]
            ]);
        }
    }
}
