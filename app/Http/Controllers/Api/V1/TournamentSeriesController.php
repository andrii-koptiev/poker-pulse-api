<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\StoreTournamentSeriesRequest;
use App\Http\Requests\UpdateTournamentSeriesRequest;
use App\Models\TournamentSeries;
use App\Http\Controllers\Controller;

class TournamentSeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return TournamentSeries::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTournamentSeriesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TournamentSeries $tournamentSeries)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TournamentSeries $tournamentSeries)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        UpdateTournamentSeriesRequest $request,
        TournamentSeries $tournamentSeries
    ) {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TournamentSeries $tournamentSeries)
    {
        //
    }
}
