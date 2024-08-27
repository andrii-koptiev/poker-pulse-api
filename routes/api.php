<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\TournamentSeriesController;
use App\Http\Controllers\Api\V1\TournamentController;

Route::get("/user", function (Request $request) {
    return $request->user();
})->middleware("auth:sanctum");

// api/v1
Route::group(
    ["prefix" => "v1", "namespace" => "App\Http\Controllers\Api\V1"],
    function () {
        Route::apiResource(
            "tournament-series",
            TournamentSeriesController::class
        );
        Route::apiResource("tournaments", TournamentController::class);
    }
);
