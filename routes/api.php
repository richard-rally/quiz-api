<?php

use Illuminate\Http\Request;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group([], function (Router $router) {

    Route::get('quizzes', "QuizController@index");
    Route::post('quizzes', "QuizController@store");
    Route::get('quizzes/{quiz}', "QuizController@show");
    Route::patch('quizzes/{quiz}', "QuizController@update");
    Route::delete('quizzes/{quiz}', "QuizController@destroy");

    Route::get('rounds', "RoundController@index");
    Route::post('rounds', "RoundController@store");
    Route::get('rounds/{round}', "RoundController@show");
    Route::patch('rounds/{round}', "RoundController@update");
    Route::delete('rounds/{round}', "RoundController@destroy");

    Route::get('questions', "QuestionController@index");
    Route::post('questions', "QuestionController@store");
    Route::get('questions/{question}', "QuestionController@show");
    Route::patch('questions/{question}', "QuestionController@update");
    Route::delete('questions/{question}', "QuestionController@destroy");

});
