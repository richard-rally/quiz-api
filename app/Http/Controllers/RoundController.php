<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRoundRequest;
use App\Http\Requests\UpdateRoundRequest;
use App\Http\Resources\QuizResource;
use App\Http\Resources\RoundResource;
use App\Quiz;
use App\Round;
use Illuminate\Http\Request;

class RoundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        RoundResource::collection(Round::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateRoundRequest $request
     * @return RoundResource
     */
    public function store(CreateRoundRequest $request)
    {
        return RoundResource::make(Round::create($request->validated()));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Round  $round
     * @return RoundResource
     */
    public function show(Round $round)
    {
        return RoundResource::make($round);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateRoundRequest $request
     * @param \App\Round $round
     * @return RoundResource
     */
    public function update(UpdateRoundRequest $request, Round $round)
    {
        return RoundResource::make(tap($round)->update($request->validated()));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Round  $round
     * @return \Illuminate\Http\Response
     */
    public function destroy(Round $round)
    {
        //
    }
}
