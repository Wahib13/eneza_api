<?php

use Illuminate\Http\Request;

use App\Course;
use App\Subject;

use App\Tutorial;

use App\Choice;

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

Route::get('courses', 'CourseController@index');
Route::get('courses/{course}', 'CourseController@show');
Route::post('courses', 'CourseController@store');
Route::put('courses/{course}', 'CourseController@update');
Route::delete('courses/{course}', 'CourseController@delete');

Route::get('subjects', 'SubjectController@index');
Route::get('subjects/{subject}', 'SubjectController@show');
Route::post('subjects', 'SubjectController@store');
Route::put('subjects/{subject}', 'SubjectController@update');
Route::delete('subjects/{subject}', 'SubjectController@delete');

Route::get('choices', 'ChoiceController@index');
Route::get('choices/{choice}', 'ChoiceController@show');
Route::post('choices', 'ChoiceController@store');
Route::put('choices/{choice}', 'ChoiceController@update');
Route::delete('choices/{choice}', 'ChoiceController@delete');

Route::get('tutorials', 'TutorialController@index');
Route::get('tutorials/{tutorial}', 'TutorialController@show');
Route::post('tutorials', 'TutorialController@store');
Route::put('tutorials/{tutorial}', 'TutorialController@update');
Route::delete('tutorials/{tutorial}', 'TutorialController@delete');

Route::get('quizes', 'QuizController@index');
Route::get('quizes/{quiz}', 'QuizController@show');
Route::post('quizes', 'QuizController@store');
Route::put('quizes/{quiz}', 'QuizController@update');
Route::delete('quizes/{quiz}', 'QuizController@delete');

Route::get('questions', 'QuestionController@index');
Route::get('questions/{question}', 'QuestionController@show');
Route::post('questions', 'QuestionController@store');
Route::put('questions/{question}', 'QuestionController@update');
Route::delete('questions/{question}', 'QuestionController@delete');