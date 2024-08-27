<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class TournamentSeeder extends Seeder
{
    public function run(): void
    {
        $jsonPath = database_path("data/tournaments.json");
        $jsonData = json_decode(File::get($jsonPath), true);

        foreach ($jsonData as $item) {
            $series = DB::table("tournament_series")
                ->where("series_name", $item["series_name"])
                ->first();

            if ($series) {
                DB::table("tournaments")->insert([
                    "series_id" => $series->id,
                    "tournament_name" => $item["tournament_name"],
                    "event_type" => $item["event_type"],
                    "game_type" => $item["game_type"],
                    "buy_in" => $item["buy_in"],
                    "rake_percentage" => $item["rake_percentage"],
                    "currency" => $item["currency"],
                    "blind_levels" => $item["blind_levels"],
                    "guarantee" => $item["guarantee"],
                    "date_time" => $item["date_time"],
                    "casino" => $item["casino"],
                    "created_at" => now(),
                    "updated_at" => now(),
                ]);
            }
        }
    }
}
