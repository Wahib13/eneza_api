<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tutorial;

class TutorialController extends Controller
{
    //
    public function index()
    {
        return Tutorial::all();
    }
 
    public function show($id)
    {
        return Tutorial::find($id);
    }

    public function store(Request $request)
    {
        $tutorial = Tutorial::create($request->all());
        return response()->json($tutorial, 201);
    }

    public function update(Request $request, $id)
    {
        $tutorial = Tutorial::findOrFail($id);
        $tutorial->update($request->all());

        return response()->json($tutorial, 200);
    }

    public function delete(Request $request, $id)
    {
        $tutorial = Tutorial::findOrFail($id);
        $tutorial->delete();

        return response()->json(null, 204);
    }
}
