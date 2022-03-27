@extends('students.layout')
@section('content')
<div class="pull-left">
<h2>    Student Management System</h2>
</div>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a href="{{route('student.create')}}" class="btn btn-success">Add New Student</a>
        </div>
    </div>
    
</div>
@if($message=Session::get('success'))
<div class="alert alert-success">
    <p>{{$message}}</P>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>FirstName</th>
        <th>LastName</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>
    @foreach($students as $student)
    <tr>
        <td>{{++$i}}</td>
        <td>{{$student->firstname}}</td>
        <td>{{$student->lastname}}</td>
        <td>{{$student->email}}</td>
        <td>{{$student->phone}}</td>
        <td>
            <form action="{{route('student.destroy',$student->id)}}" method="POST">
<a href="{{ route('student.show',$student->id)}}" class="btn btn-info">show</a>
<a href="{{ route('student.edit',$student->id)}}" class="btn btn-primary">edit</a>
@csrf
@method('DELETE')
<button class="btn btn-danger" type="submit">Delete</button>
</form>
        </td>
    </tr>
@endforeach
</table>