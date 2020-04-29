<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateQuizRequest;
use App\Http\Requests\UpdateQuizRequest;
use App\Http\Resources\QuizResource;
use App\Quiz;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        return QuizResource::collection(Quiz::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateQuizRequest $request
     * @return QuizResource
     */
    public function store(CreateQuizRequest $request)
    {
        return QuizResource::make(Quiz::create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Quiz $quiz
     * @return QuizResource
     */
    public function show(Quiz $quiz)
    {
        return QuizResource::make($quiz);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateQuizRequest $request
     * @param \App\Quiz $quiz
     * @return QuizResource
     */
    public function update(UpdateQuizRequest $request, Quiz $quiz)
    {
        return QuizResource::make(tap($quiz)->update($request->validated()));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Quiz $quiz
     * @return void
     * @throws \Exception
     */
    public function destroy(Quiz $quiz)
    {
        $quiz->delete();

        return abort(204);
    }
}
