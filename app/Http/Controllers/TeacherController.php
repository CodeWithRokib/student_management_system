<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{

    public function index()
    {
        $teachers = Teacher::all();
        return view('backend.teacher.index', compact('teachers'));
    }
    public function create()
    {
        return view('backend.teacher.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:teachers,email',
            'number' => 'required|string|max:15',
            'department' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
        ]);

        Teacher::create($request->all());

        return redirect()->route('teachers.index')->with('success', 'Teacher created successfully.');
    }

    public function update(Request $request, Teacher $teacher)
{
    // Validate the request
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email' , 
        'number' => 'required|string|max:15',
        'department' => 'required|string|max:255',
        'designation' => 'required|string|max:255',
    ]);

    // Update the teacher with validated data
    $teacher->update($request->all());

    // Redirect back with success message
    return redirect()->route('teachers.index')->with('success', 'Teacher updated successfully.');
}

    public function edit(Teacher $teacher){
        return view('backend.teacher.edit',compact('teacher'));
    }
    public function destroy(Teacher $teacher){
        $teacher->delete();
        return redirect()->route('departments.index')->with('success', 'Teacher deleted successfully.');

    }
}