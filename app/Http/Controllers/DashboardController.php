<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Institute;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $students = Student::get()->count();

        $institutes_t = Institute::where('type','TECNOLOGICO')->get()->count();
        $institutes_p = Institute::where('type','PEDAGOGICO')->get()->count();

        



        return view('dashboard',compact('students','institutes_t','institutes_p'));
    }

}
