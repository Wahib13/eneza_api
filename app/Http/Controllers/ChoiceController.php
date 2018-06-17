<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Choice;

class ChoiceController extends Controller
{
    //
    public function index()
    {
        return Choice::all();
    }
 
    public function show($id)
    {
        return Choice::find($id);
    }

    public function store(Request $request)
    {
        $choice = Choice::create($request->all());
        return response()->json($choice, 201);
    }

    public function update(Request $request, $id)
    {
        $choice = Choice::findOrFail($id);
        $choice->update($request->all());

        return response()->json($choice, 200);
    }

    public function delete(Request $request, $id)
    {
        $choice = Choice::findOrFail($id);
        $choice->delete();

        return response()->json(null, 204);
    }
}
