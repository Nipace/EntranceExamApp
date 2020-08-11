<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\QuestionAnswer;
use App\Student;
use App\StudentAnswer;

class QuestionController extends Controller
{
    public function index($set, $roll)
    {
        $question = QuestionAnswer::where('set',$set)->simplePaginate(1);
        $student = Student::where('roll_number',$roll)->get();
        return view('frontend.question',compact('question','student'));
    }
    public function store(Request $request, $set, $roll)
    {
        $exist_answer = StudentAnswer::all();
        $answer = new StudentAnswer();
        $answer->roll_number = $roll;
        $answer->question_id = $request->question_id;
        $answer->student_answer = $request->answer;
        if($request->answer == $request->right_answer)
        {
            $answer->is_right = 'yes';
        }
        foreach($exist_answer as $e)
        if($e->question_id == $request->question_id && $e->roll_number == $roll)
        {
            return redirect()->back()->with('error','Answer already submitted');
        }
        $answer->save();
        return redirect()->back()->with('success','Answer submitted successfully');
    }

    public function thankyou($roll)
    {
        $student = Student::where('roll_number',$roll)->get();
        $total_answer = StudentAnswer::where('roll_number',$roll)->get();
        $total_answer = \count($total_answer);
        $right_answer = StudentAnswer::where('is_right','yes')->where('roll_number',$roll)->get();
        $right_answer = count($right_answer);
        return view('frontend.thankyou',compact('student','total_answer','right_answer'));

    }
}
