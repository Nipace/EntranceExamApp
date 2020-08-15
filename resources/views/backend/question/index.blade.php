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
            <th scope="col">Operations</th>
            </tr>
        </thead>
        <?php
            $i=1;
        ?>
        <tbody>
            @foreach($question as $questions)
                <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{!!$questions->question!!}</td>
                    <td>{{$questions->marks}}</td>
                    <td>{{$questions->right_answer}}</td>
                   
                    <td>
                    <form action="{{route('question.destroy',[$set,$questions->id])}}" method="POST">
                    @csrf
                    @method('delete')
                    <a href="{{route('question.edit',[$set,$questions->id])}}" class="btn btn-sm btn-success">Edit</a>
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                    </td>
                   
                </tr>
            @endforeach
        </tbody>
        </table>
        {{$question->links()}}
    </div>
</div>

@endsection