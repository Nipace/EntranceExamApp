@extends('layouts.frontend')
@section('content')
<section class="home-top" style="min-height:400px">
  
  </div>
</section>
<section>
<div class="d-flex justify-content-center">
  <div class="card question-card" style="width: 18rem;">
    <div class="card-body">
        @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Sorry!</strong> {{session('error')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> {{session('success')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>        
        @endif
        <h2 class="card-title text-center"> Grade XI Entrance Exam</h2> <hr class="bg-danger">
        @foreach($student as $students)
        <div class="d-flex justify-content-start font-weight-bold">Student Name: {{$students->student_name}}  <br>
            Roll Number: {{$students->roll_number}}
        </div>
        @endforeach
        <div class="d-flex justify-content-end font-weight-bold">Time: 2 hrs</div>

        <h5>Guidelines:</h5>
        <ul>
            <li>Submit your answer by selecting right answer.</li>
            <li>You can skip the question by clicking next option</li>
            <li>Once submitted answer cannot be changed</li>
        </ul>
        <?php $i=1 ?>
        <form action="{{route('studentquestion.store', ['set'=>request()->route()->set,'roll'=>request()->route()->roll])}}" method="POST" class="border mb-3">
            @csrf
            @foreach($question as $questions)
                <label class ="mt-2 ml-3" for="student-name">Q.{{$questions->id}} {{$questions->question}} <span class="">({{$questions->marks}} marks)</span></label>
              
                <div class="form-check ml-3">
                    <input class="form-check-input" type="radio" name="answer" id="answer" value="{{$questions->option1}}" checked>
                    <label class="form-check-label" for="exampleRadios1">
                       {{$questions->option1}}
                    </label>
                </div>
                <div class="form-check ml-3">
                    <input class="form-check-input" type="radio" name="answer" id="answer" value="{{$questions->option2}}" checked>
                    <label class="form-check-label" for="exampleRadios1">
                       {{$questions->option2}}
                    </label>
                </div>
                <div class="form-check ml-3">
                    <input class="form-check-input" type="radio" name="answer" id="answer" value="{{$questions->option3}}" checked>
                    <label class="form-check-label" for="exampleRadios1">
                       {{$questions->option3}}
                    </label>
                </div>
                <div class="form-check ml-3">
                    <input class="form-check-input" type="radio" name="answer" id="answer" value="{{$questions->option4}}" checked>
                    <label class="form-check-label" for="exampleRadios1">
                       {{$questions->option4}}
                    </label>
                </div>
                <input type="hidden" name="right_answer" value ="{{$questions->right_answer}}">
                <input type="hidden" name="question_id" value ="{{$questions->id}}">

                <button type="submit" class="btn btn-sm btn-secondary ml-3 mt-3 mb-3">Submit</button>
            @endforeach
        </form>
        {{$question->links()}}
    </div>
  </div>
</div>
</section>
@endsection