<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\QuestionAnswer;
use App\Http\Requests\AdminQuestion;
 

class QuestionAnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($set)
    {
        $question = QuestionAnswer::where('set',$set)->paginate(5);
        return view('backend.question.index',compact('question','set'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($set)
    {
        return view('backend.question.create',compact('set'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminQuestion $request, $set)
    {
       $question = new QuestionAnswer();
       $question->question = $request->question;
       $question->option1 = $request->option1;
       $question->option2 = $request->option2;
       $question->option3 = $request->option3;
       $question->option4 = $request->option4;
       $question->marks = $request->marks;
       $question->right_answer = $request->right_answer;
       $question->set = $set;
       $question->save();
       return redirect()->back()->with('success','Question  Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($set, $questionId)
    {
  
        $question = QuestionAnswer::find($questionId);
        return view('backend.question.edit',compact('question','set'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $set, $questionId)
    {
        $question = QuestionAnswer::find($questionId);
        $question->question = $request->question;
        $question->option1 = $request->option1;
        $question->option2 = $request->option2;
        $question->option3 = $request->option3;
        $question->option4 = $request->option4;
        $question->marks = $request->marks;
        $question->right_answer = $request->right_answer;
        $question->set = $set;
        $question->save();
        return redirect()->back()->with('success','Question  Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($set, $questionId)
    {
        $question = QuestionAnswer::find($questionId);
        $question->delete();
        return redirect()->back();
    }
}
