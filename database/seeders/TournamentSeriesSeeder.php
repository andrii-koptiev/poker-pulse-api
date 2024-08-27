<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class TournamentSeriesSeeder extends Seeder
{
    public function run(): void
    {
        $jsonPath = database_path("data/tournament_series.json");
        $jsonData = json_decode(File::get($jsonPath), true);

        foreach ($jsonData as $item) {
            DB::table("tournament_series")->insert([
                "series_name" => $item["series_name"],
                "start_date" => $item["start_date"],
                "end_date" => $item["end_date"],
                "location" => $item["location"],
                "link" => $item["link"],
                "created_at" => now(),
                "updated_at" => now(),
            ]);
        }
        // $this->call(TournamentSeeder::class);
    }
}
