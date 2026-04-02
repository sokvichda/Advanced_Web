<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = [
            ['name' => 'Alice', 'age' => 20],
            ['name' => 'lyly', 'age' => 21],
            ['name' => 'Liza', 'age' => 19],
        ];

        return view('students', compact('students'));
    }
}