<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('students');
    }

    public function getAll()
    {
        $students = Student::all();
        return view('students', ['students' => $students]);
    }

    public function getOne($id)
    {
        //$students = Student::find($id);
        $student = Student::where('student_number', $id)->first();
        //dd($student);
        return view('student', ['student' => $student]);
    }
}
