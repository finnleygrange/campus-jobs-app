<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\LineManager;
use App\Models\Student;
use Illuminate\Http\Request;

class FormController extends Controller
{
    function index() {
        $students = Student::all();
        $jobs = Job::all();
        $line_managers = LineManager::all();

        return view('form', compact('students', 'jobs', 'line_managers'));
    }
}
