@extends('layouts.app')
@section('content')

<div class="col-md-4 ">
            <form action="/admin/search" method="get">
                <div class="input-group">
                    <input type="search" class="form-control" name="search" placeholder="Search">
                    <span class="input-group-prepend">
                    <button type="submit" class="btn btn-info"><i class="fas fa-search"></i></button>
                </span>
                </div>
            </form>
        </div>
<div class="col-md-12 mt-3">
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Roll Number</th>
            <th scope="col">Operations</th>
            </tr>
        </thead>
        <?php
        $i=1?>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{$student->student_name}}</td>
                    <td>{{$student->roll_number}}</td>
                    <td>
                    <a href="/admin/{{$student->roll_number}}/result" class="btn btn-sm btn-primary pull-left my-1 ml-1 mr-1"><i class="far fa-edit"></i>View Result</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>
        
    </div>
</div>

@endsection