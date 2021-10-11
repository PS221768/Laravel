<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('songs')->truncate();

        for ($i=0; $i < 5; $i++) { 
            $title = "songs " . $i;
            DB::table('songs')->insert([
                'title' => $title,
                "singer" => "that one guy",
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

    }

}
