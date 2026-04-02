<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    
    public function create()
    {
        return view('student_form');
    }

    
    public function store(Request $request)
    {
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'age' => 'required|integer|min:0',
        ]);

        return back()->with('success', 'Student information submitted successfully!');
    }
}