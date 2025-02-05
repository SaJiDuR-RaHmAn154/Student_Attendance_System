<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Authenticated users only
    }

    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }
}


