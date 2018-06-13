<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Subject;
 
class SubjectController extends Controller
{
    public function index()
    {
        return Subject::all();
    }
 
    public function show($id)
    {
        return Subject::find($id);
    }

    public function store(Request $request)
    {
        $subject = Subject::create($request->all());
        return response()->json($course, 201);
    }

    public function update(Request $request, $id)
    {
        $subject = Subject::findOrFail($id);
        $subject->update($request->all());

        return response()->json($subject, 200);
    }

    public function delete(Request $request, $id)
    {
        $subject = Subject::findOrFail($id);
        $subject->delete();

        return response()->json(null, 204);
    }
}