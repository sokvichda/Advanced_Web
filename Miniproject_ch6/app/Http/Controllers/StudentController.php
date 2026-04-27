<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = [
            ['name' => 'Nita', 'age' => 80],
            ['name' => 'Sara', 'age' => 52],
            ['name' => 'lyly', 'age' => 41],
        ];

        return view('students', compact('students'));
    }
}