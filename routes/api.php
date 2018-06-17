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

Route::get('courses', 'CourseController@index')->middleware('auth:api');
Route::get('courses/{course}', 'CourseController@show')->middleware('auth:api');
Route::post('courses', 'CourseController@store')->middleware('auth:api');
Route::put('courses/{course}', 'CourseController@update')->middleware('auth:api');
Route::delete('courses/{course}', 'CourseController@delete')->middleware('auth:api');

Route::get('subjects', 'SubjectController@index')->middleware('auth:api');
Route::get('subjects/{subject}', 'SubjectController@show')->middleware('auth:api');
Route::post('subjects', 'SubjectController@store')->middleware('auth:api');
Route::put('subjects/{subject}', 'SubjectController@update')->middleware('auth:api');
Route::delete('subjects/{subject}', 'SubjectController@delete')->middleware('auth:api');

Route::get('choices', 'ChoiceController@index')->middleware('auth:api');
Route::get('choices/{choice}', 'ChoiceController@show')->middleware('auth:api');
Route::post('choices', 'ChoiceController@store')->middleware('auth:api');
Route::put('choices/{choice}', 'ChoiceController@update')->middleware('auth:api');
Route::delete('choices/{choice}', 'ChoiceController@delete')->middleware('auth:api');

Route::get('tutorials', 'TutorialController@index')->middleware('auth:api');
Route::get('tutorials/{tutorial}', 'TutorialController@show')->middleware('auth:api');
Route::post('tutorials', 'TutorialController@store')->middleware('auth:api');
Route::put('tutorials/{tutorial}', 'TutorialController@update')->middleware('auth:api');
Route::delete('tutorials/{tutorial}', 'TutorialController@delete')->middleware('auth:api');

Route::get('quizes', 'QuizController@index')->middleware('auth:api');
Route::get('quizes/{quiz}', 'QuizController@show')->middleware('auth:api');
Route::post('quizes', 'QuizController@store')->middleware('auth:api');
Route::put('quizes/{quiz}', 'QuizController@update')->middleware('auth:api');
Route::delete('quizes/{quiz}', 'QuizController@delete')->middleware('auth:api');

Route::get('questions', 'QuestionController@index')->middleware('auth:api');
Route::get('questions/{question}', 'QuestionController@show')->middleware('auth:api');
Route::post('questions', 'QuestionController@store')->middleware('auth:api');
Route::put('questions/{question}', 'QuestionController@update')->middleware('auth:api');
Route::delete('questions/{question}', 'QuestionController@delete')->middleware('auth:api');


