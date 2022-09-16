<?php

namespace Database\Seeders;

use App\Models\murid;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Gender extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        murid::create([
            "jk" => "L"
        ]);

        murid::create([
            "jk" => "P"
        ]);
    }
}
