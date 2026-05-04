<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\ClassModel;
class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with('classModel')->get();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        $classes = ClassModel::all();
        return view('students.create', compact('classes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'class_model_id' => 'required|exists:class_models,id'
        ]);

        Student::create([
            'name' => $request->name,
            'class_model_id' => $request->class_model_id
        ]);

        return redirect()->route('students.index');
    }

    public function edit(Student $student)
    {
        $classes = ClassModel::all();
        return view('students.edit', compact('student', 'classes'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'class_model_id' => 'required|exists:class_models,id'
        ]);

        $student->update([
            'name' => $request->name,
            'class_model_id' => $request->class_model_id
        ]);

        return redirect()->route('students.index');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index');
    }
}