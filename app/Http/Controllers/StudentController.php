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
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $data['password'] = Hash::make($request->password);

        Student::create($data);

        return redirect()->route('student.index')->with('success', 'Student created successfully.');
    }
}