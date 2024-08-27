<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create("tournaments", function (Blueprint $table) {
            $table->id();
            $table
                ->foreignId("series_id")
                ->constrained("tournament_series")
                ->onDelete("cascade");
            $table->string("tournament_name");
            $table->string("event_type");
            $table->string("game_type");
            $table->decimal("buy_in", 10, 2);
            $table->decimal("rake_percentage", 5, 2);
            $table->string("currency");
            $table->integer("blind_levels");
            $table->decimal("guarantee", 15, 2);
            $table->dateTime("date_time");
            $table->text("casino");
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists("tournaments");
    }
};
