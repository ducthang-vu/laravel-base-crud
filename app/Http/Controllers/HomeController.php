<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $allStudents = Student::all();
        return view('home', compact('allStudents'));
    }
}
