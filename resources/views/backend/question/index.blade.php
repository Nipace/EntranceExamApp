@extends('layouts.app')
@section('content')

<a href="{{route('question.create',$set)}}" class="btn btn-danger">Add Questions</a>
<div class="col-md-12 mt-3">
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Question</th>
            <th scope="col">Marks</th>
            <th scope="col">Right Answer</th>
            </tr>
        </thead>
        <tbody>
            @foreach($question as $questions)
                <tr>
                    <th scope="row">1</th>
                    <td>{{$questions->question}}</td>
                    <td>{{$questions->marks}}</td>
                    <td>{{$questions->right_answer}}</td>
                </tr>
            @endforeach
        </tbody>
        </table>
        {{$question->links()}}
    </div>
</div>

@endsection