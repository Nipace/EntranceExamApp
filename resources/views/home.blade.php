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
      <h2 class="card-title text-center"> Select Set for Exam</h2>
      <div class="d-flex flex-row justify-content-center">
        <a href="{{route('student.index','1')}}">
            <div class="card inner-set-card ml-3">
              <div class="card-body" style="width:10rem;">
                <h3 class="card-title">Set 1</h3>
              </div>
            </div> 
        </a> 
        <a href="{{route('student.index','2')}}">
            <div class="card inner-set-card ml-3">
              <div class="card-body" style="width:10rem;">
                <h3 class="card-title">Set 2</h3>
              </div>
            </div> 
        </a> 
        <a href="{{route('student.index','3')}}">
            <div class="card inner-set-card ml-3">
              <div class="card-body" style="width:10rem;">
                <h3 class="card-title">Set 3</h3>
              </div>
            </div> 
        </a> 
      </div>
      <div class="d-flex flex-row mt-3 mb-5 justify-content-center">
        <a href="{{route('student.index','4')}}">
                <div class="card inner-set-card ml-3">
                  <div class="card-body" style="width:10rem;">
                    <h3 class="card-title">Set 4</h3>
                  </div>
                </div> 
        </a> 
        <a href="{{route('student.index','5')}}">
          <div class="card inner-set-card ml-3">
            <div class="card-body" style="width:10rem;">
              <h3 class="card-title">Set 5</h3>
            </div>
          </div> 
        </a>  
      </div>
      <p class="text-center">
        Please select a set to proceed further.
      </p>
    </div>
  </div>
</div>
</section>
@endsection

