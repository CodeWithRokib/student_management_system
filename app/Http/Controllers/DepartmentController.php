<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        return view('backend.department.index', compact('departments'));
    }
    public function create()
    {
        return view('backend.department.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Department::create($request->all());

        return redirect()->route('department.index')->with('success', 'Department created successfully.');
    }
}