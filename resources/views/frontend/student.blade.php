@extends('layouts.frontend')
@section('content')
<section class="home-top" style="min-height:400px">
  <div class="d-flex justify-content-center">
      <h4 class="text-light mt-5">Entrance Exam for Grade XI 2077</h4>
  </div>
  <div class="d-flex justify-content-center">
    <img src="/img/omegalogo2.jpg" alt="" srcset="" height="100px" width="100px">    <br>
  </div>
  <div class="d-flex justify-content-center">
    <h1 class="text-light">Omega Secondary School</h1>
  </div>
</section>
<section>
<div class="d-flex justify-content-center">
  <div class="card set-card" style="width: 18rem;">
    <div class="card-body">
        <h2 class="card-title text-center"> Student Information</h2>
        <p>Please enter your information to proceed further.</p>
        <form action="{{route('student.store', request()->route()->set)}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="student-name">Student Name <span class="text-danger">*</span></label>
                <input type="text" name="student_name"class="form-control" id="student-name" >
            </div>
            <div class="form-group">
                <label for="student-rollnumber">Roll Number <span class="text-danger">*</span></label>
                <input type="text" name="student_rollnumber" class="form-control" id="student-rollnumber">
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>
  </div>
</div>
</section>
@endsection