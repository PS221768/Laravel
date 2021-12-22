<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class albums extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('albums')->truncate();

        for ($i=0; $i < 5; $i++) { 
            $name = "album " . $i;
            DB::table('albums')->insert([
                'name' => $name,
                "year" => 2021,
                'times_sold' => rand(10000, 100000),
            ]);
        }
    }
}
