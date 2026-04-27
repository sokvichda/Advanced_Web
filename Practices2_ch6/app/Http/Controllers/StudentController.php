<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function students()
    {
        $students = ['Anna', 'Bob', 'Chris'];
        return view('students', compact('students'));
    }
}

