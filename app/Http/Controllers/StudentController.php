<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::latest()->get();

        return view('students', compact('students'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students,email',
            'course' => 'required',
        ]);

        Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'course' => $request->course,
        ]);

        return redirect('/students');
    }
}
