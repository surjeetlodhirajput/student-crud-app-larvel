<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student management system</title>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/show.css') }}" />

</head>
<body>
<div class="outer-box">
    <div class="inner-box">{{$student->firstname}}</div>
    <div class="inner-box">{{$student->lastname}}</div>
    <div class="inner-box">{{$student->email}}</div>
    <div class="inner-box">{{$student->phone}}</div>
    <div class="pull-right">
            <a href="{{route('student.index')}}" class="btn btn-primary">Back</a>
        </div>
</div>
</body>
</html>
