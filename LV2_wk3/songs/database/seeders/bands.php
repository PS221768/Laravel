<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class bands extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bands')->truncate();

        for ($i=0; $i < 5; $i++) { 
            $name = "band " . $i;
            DB::table('bands')->insert([
                'name' => $name,
                "founded" => 2021,
                'active_till' => now(),
            ]);
        }

        /*
        DB::table("album_song")->truncate();

        DB:table("album_song")->insert([
            /// nvt 'id'
            'album_id' => 1,
            'song_id' => 1,
        ])
        */

    }
}
