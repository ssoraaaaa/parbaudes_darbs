<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kurss extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return response()->json($courses, 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'banner_url' => 'required|url',
            'students_count' => 'required|integer',
        ]);

        $course = Course::create($request->all());
        return response()->json($course, 201);
    }
}
