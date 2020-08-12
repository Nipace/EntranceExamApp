@extends('layouts.frontend')
@section('content')
<?php
 
?>
<div class="d-flex justify-content-center mt-5 text-purple">
<h1> <img src="/img/omegalogo2.jpg" alt="" srcset="" height="100px" width="100px"> Omega Secondary School</h1>
</div>
<div class="d-flex justify-content-center">
<h3 class="ml-5 pl-5">Grade XI Entrance Exam 2077</h3>
</div>
<hr class="bg-danger">
<div class="d-flex justify-content-center mt-5">
    <div class="d-flex flex-row">
        @foreach($student as $students)
            <h3 class="text-purple">Thank you {{$students->student_name}}</h3>
        @endforeach
    </div>
</div>
<div class="d-flex flex-row justify-content-center">
            <h5 class="pt-3">Total Questions Answered: {{$total_answer}}</h5>
</div>
            <h5 class=" text-center">Right Answer: {{$right_answer}}</h5>          
            <hr class="bg-grey" width="30%">
            <div class="d-flex flex-row justify-content-center ml-5">
            <button class = "btn btn-purple" style="margin-left:200px;" onClick="window.print()"> Print <i class="fas fa-print"></i> </button>
            </div>
            
@endsection