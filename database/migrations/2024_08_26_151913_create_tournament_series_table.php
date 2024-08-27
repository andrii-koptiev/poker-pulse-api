<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create("tournament_series", function (Blueprint $table) {
            $table->id();
            $table->string("series_name");
            $table->date("start_date");
            $table->date("end_date");
            $table->text("location");
            $table->string("link");
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists("tournament_series");
    }
};
