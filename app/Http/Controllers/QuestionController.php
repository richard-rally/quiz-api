<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateQuestionRequest;
use App\Http\Requests\UpdateQuestionRequest;
use App\Http\Resources\QuestionResource;
use App\Question;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return QuestionResource
     */
    public function index()
    {
        return QuestionResource::make(Question::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateQuestionRequest $request
     * @return QuestionResource
     */
    public function store(CreateQuestionRequest $request)
    {
        return QuestionResource::make(Question::create($request->validated()));
    }

    /**
     * Display the specified resource.
     *
     * @param Question $question
     * @return QuestionResource
     */
    public function show(Question $question)
    {
        return QuestionResource::make($question);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateQuestionRequest $request
     * @param Question $question
     * @return QuestionResource
     */
    public function update(UpdateQuestionRequest $request, Question $question)
    {
        return QuestionResource::make(tap($question)->update($request->validated()));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Question $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }
}
