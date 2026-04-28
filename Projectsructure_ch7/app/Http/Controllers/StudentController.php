<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    // READ (List all)
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    // CREATE (Show form)
    public function create()
    {
        return view('students.create');
    }

    // STORE (Save new)
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'age' => 'required|integer'
        ]);

        Student::create($request->all());

        return redirect('/students')->with('success', 'Student added');
    }

    // EDIT (Show edit form)
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('students.edit', compact('student'));
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'age' => 'required|integer'
        ]);

        $student->update($request->all());

        return redirect('/students')->with('success', 'Student updated');
    }

    // DELETE
    public function destroy($id)
    {
        Student::destroy($id);
        return redirect('/students')->with('success', 'Student deleted');
    }
}