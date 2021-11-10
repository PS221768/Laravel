<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VoetballerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('voetballer')->insert([
            'FirstName' => "Henk",
            'PrefixName' => "de",
            'LastName' => "steen"
        ]);
        DB::table('voetballer')->insert([
            'FirstName' => "Henky",
            'PrefixName' => "van der",
            'LastName' => "steen"
        ]);
        DB::table('voetballer')->insert([
            'FirstName' => "Henkster",
            'PrefixName' => "van",
            'LastName' => "steen"
        ]);
    }
}
