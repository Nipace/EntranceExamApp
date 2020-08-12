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
        $validatedData = $request->validate([
            'student_name' => 'required',
            'roll_number' => 'required|unique:students|numeric',
            'phone'=>'required|numeric',
            'school'=>'required',
        ]);
        $student = new Student();
        $student->student_name = $request->student_name;
        $student->roll_number = $request->roll_number;
        $student->school = $request->school;
        $student->phone = $request->phone;
        $student->save();
        return redirect(route('studentquestion.index',['set'=>$set, 'roll'=>$request->roll_number]))->with('student_name');
    }
    
}
