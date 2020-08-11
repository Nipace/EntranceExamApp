@extends('layouts.app')
@section('content')
<h3 class="text-purple"> Add New Question</h3>
<hr>
<div class="container">
    <form action="{{route('question.store',$set)}}" method="POST">
    @csrf
    <div class="form-group">
    <h4 class="text-purple">Question </h4>     
        @error('question')
            <h6 class="text-danger">{{ $message }}</h6>
        @enderror
        <textarea class="description" name="description"></textarea>
        <small id="emailHelp" class="form-text text-muted">Enter your Question </small>
    </div>
    <hr>
    <h4 class="text-purple">Answers</h4>
    <div class="row">
        <div class="col-md-6">
            <label for="option1">Option 1 <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="option1" aria-describedby="option" name="option1">
            @error('option1')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="option2">Option 2 </label>
            <input type="text" class="form-control" id="option2" aria-describedby="option" name="option2">
            @error('option2')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="option2">Option 3 </label>
            <input type="text" class="form-control" id="option2" aria-describedby="option" name="option3">
            @error('option3')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="option3">Option 4 </label>
            <input type="text" class="form-control" id="option3" aria-describedby="option" name="option4">
            @error('option4')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <hr>
    <h4 class="text-purple">Marks And Right Answer</h4>
    <div class="row mb-3">
        <div class="col-md-6">
            <label for="option4">Marks</label>
            <input type="text" class="form-control" id="option4" aria-describedby="option" name="marks">
            @error('marks')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="option5">Right Answer </label>
            <input type="text" class="form-control" id="option5" aria-describedby="option" name="right_answer">
            @error('right_answer')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <button class="btn btn-success mb-2" type="submit">Submit</button>
    </form>
</div>

@endsection