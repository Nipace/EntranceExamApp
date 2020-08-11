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
        $question = QuestionAnswer::where('set',$set)->paginate(1);
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
       return redirect(route('question.index',$set));
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
