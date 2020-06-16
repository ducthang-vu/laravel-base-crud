<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $allStudents = Student::all();
        $class1 = Student::where('class', 1)->get();
        $class2 = Student::where('class', 2)->get();
        $females = Student::where('gender', 'f')->get();
        $born1990 = Student::where('birth_year', '1990')->get();

        return view('home', compact('allStudents', 'class1', 'class2', 'females', 'born1990'));
    }
}
