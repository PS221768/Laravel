<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class leenautosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('leenautos')->truncate();

        DB::table('leenautos')->insert([
            'merk' => "Honda Insight",
            'type' => "Hybrid",
            'bouwjaar' => 2019,
        ]);

        DB::table('leenautos')->insert([
            'merk' => "Tesla Model 3",
            'type' => "electric",
            'bouwjaar' => 2017,
        ]);

        DB::table('leenautos')->insert([
            'merk' => "Hyundai Sonata Hybrid",
            'type' => "Hybrid",
            'bouwjaar' => 2020,
        ]);
    }
}
