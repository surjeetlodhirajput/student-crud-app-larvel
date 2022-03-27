@extends('students.layout')
@section('content')
<div class="row" style="margin-left:500px;margin-top:100px">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Student</h2>
        </div>
        <div class="pull-right">
            <a href="{{route('student.index')}}" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>


<form action="{{ route('student.store')}}"  method="POST" style="margin-left:500px;margin-top:10px">
    @csrf
    <div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
    <strong>FirstName:</strong>
    <input type="text" name="firstname" class="form-control" style="width:300px;" placeholder="firstname">
</div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
    <strong>LasttName:</strong>
    <input type="text" name="lastname" class="form-control"  style="width:300px;" placeholder="lasttname">
</div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
    <strong>Email:</strong>
    <input type="text" name="email" class="form-control" style="width:300px;" placeholder="email">
</div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
    <strong>Phone:</strong>
    <input type="text" name="phone" class="form-control" placeholder="phone" style="width:300px;">
</div>
</div>
</div>
<button style="margin-top:10px;" type="submit" class="btn btn-primary">Submit</button>
</form>