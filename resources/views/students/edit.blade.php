@extends('students.layout')
@section('content')
<div class="row" style="margin-left:500px;margin-top:100px">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Student Data</h2>
        </div>
        <div class="pull-right">
            <a href="{{route('student.index')}}" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>


<form action="{{ route('student.update',$student->id)}}"  method="post" enctype="multipart/form-data" style="margin-left:500px;margin-top:10px;width:300px;">
    @csrf
    @method('PUT')
    <div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
    <strong>FirstName:</strong>
    <input type="text" name="firstname" class="form-control" placeholder="firstname" value='{{$student->firstname}}'>
</div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
    <strong>LasttName:</strong>
    <input type="text" name="lastname" class="form-control" placeholder="lasttname" value='{{$student->lastname}}'>
</div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
    <strong>Email:</strong>
    <input type="text" name="email" class="form-control" placeholder="email" value='{{$student->email}}'>
</div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
    <strong>Phone:</strong>
    <input type="text" name="phone" class="form-control" placeholder="phone" value='{{$student->phone}}'>
</div>
</div>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>