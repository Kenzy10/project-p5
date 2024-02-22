<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exercise;

class ExerciseController extends Controller
{
    public function materisatu()
    {
        return view('materisatu');
    }

    public function create()
    {
        return view('exercises.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'duration' => 'required|integer',
            'calories' => 'required|integer',
        ]);

        Exercise::create($request->all());
        return redirect()->route('exercises.index')->with('success', 'Exercise created successfully.');
    }

    public function edit(Exercise $exercise)
    {
        return view('exercises.edit', compact('exercise'));
    }

    public function update(Request $request, Exercise $exercise)
    {
        $request->validate([
            'name' => 'required|string',
            'duration' => 'required|integer',
            'calories' => 'required|integer',
        ]);

        $exercise->update($request->all());
        return redirect()->route('exercises.index')->with('success', 'Exercise updated successfully.');
    }

    public function destroy(Exercise $exercise)
    {
        $exercise->delete();
        return redirect()->route('exercises.index')->with('success', 'Exercise deleted successfully.');
    }
}
