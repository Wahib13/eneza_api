<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quiz;

class QuizController extends Controller
{
    //
    public function index()
    {
        return Quiz::all();
    }
 
    public function show($id)
    {
        return Quiz::find($id);
    }

    public function store(Request $request)
    {
        $quiz = Quiz::create($request->all());
        return response()->json($quiz, 201);
    }

    public function update(Request $request, $id)
    {
        $quiz = Quiz::findOrFail($id);
        $quiz->update($request->all());

        return response()->json($quiz, 200);
    }

    public function delete(Request $request, $id)
    {
        $quiz = Quiz::findOrFail($id);
        $quiz->delete();

        return response()->json(null, 204);
    }
}
