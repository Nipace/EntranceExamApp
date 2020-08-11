<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index()
    {
        return view('frontend.student');
    }

    public function store(Request $request, $set)
    {
        $student = new Student();
        $student->student_name = $request->student_name;
        $student->roll_number = $request->student_rollnumber;
        $student->save();
        $student_name = $request->student_name;
        return redirect(route('studentquestion.index',['set'=>$set, 'roll'=>$request->student_rollnumber]))->with('student_name');
    }
}
