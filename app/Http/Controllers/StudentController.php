<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function index(){
        $students = Student::all();
        return view('backend.student.index',compact('students'));
    }

    public function create()
    {
        return view('backend.student.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students',
            'address' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'gender' => 'required',
            'age' => 'required|integer',
            'contact' => 'required',
            'department' => 'required',
            'class' => 'required',
        ]);

        $data = $request->all();


        Student::create($data);

        return redirect()->route('students.index')->with('success', 'Student created successfully.');
    }
    public function update(Request $request, Student $student)
{
    // Validate the request
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:students',
        'address' => 'required',
        'father_name' => 'required',
        'mother_name' => 'required',
        'gender' => 'required',
        'age' => 'required|integer',
        'contact' => 'required',
        'department' => 'required',
        'class' => 'required',
    ]);

    // Update the teacher with validated data
    $student->update($request->all());

    // Redirect back with success message
    return redirect()->route('students.index')->with('success', 'Student updated successfully.');
}
    public function edit(Student $student){
        return view('backend.student.edit',compact('student'));
    }

    public function destroy(Student $student){
        $student->delete();
        return redirect()->route('students.index')->with('success','student deleted successfully');
    }
}