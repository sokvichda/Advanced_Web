<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // SHOW all students
    public function index()
    {
        $students = Student::all();
        return view('students', compact('students'));
    }

    // ADD student
    public function store()
    {
        Student::create([
            'name' => 'Sok',
            'email' => 'sok@gmail.com',
            'age' => 20
        ]);

        return "Student Added";
    }
}