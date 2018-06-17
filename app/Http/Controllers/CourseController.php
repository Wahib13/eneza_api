<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CourseController extends Controller
{
    public function index()
    {
        return Course::all();
    }
 
    public function show($id)
    {
        return Course::find($id);
    }

    public function store(Request $request)
    {
        $course = Course::create($request->all());
        return response()->json($course, 201);
    }

    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);
        $course->update($request->all());

        return response()->json($course, 200);
    }

    public function delete(Request $request, $id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        return response()->json(null, 204);
    }
}
