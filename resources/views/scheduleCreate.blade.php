@extends('layouts/scheduleMaster')
<h2> Inside create a new Course Schedule</h2>
@section('content')
    <form action="/schedule" method="post">
        @csrf
        CRS ID: <input type="text" name="title" value="{{old('CRSRID')}}">
        <p style="color: red">{{$errors->first('CRSRID')}}</p>
        Code: <input type="text" name="pages" value="{{old('Code')}}">
        <p style="color: red">{{$errors->first('Code')}}</p>
        Title: <input type="text" name="pages" value="{{old('Title')}}">
        <p style="color: red">{{$errors->first('Title')}}</p>
        Location: <input type="text" name="pages" value="{{old('Location')}}">
        <p style="color: red">{{$errors->first('Location')}}</p>
        SETime: <input type="text" name="pages" value="{{old('SETime')}}">
        <p style="color: red">{{$errors->first('START/END Time')}}</p>
        Instructor: <input type="text" name="pages" value="{{old('Instructor')}}">
        <p style="color: red">{{$errors->first('Instructor')}}</p>
        Comments: <input type="text" name="pages" value="{{old('Comments')}}">
        <p style="color: red">{{$errors->first('Comments')}}</p>
        <input type="submit" value="Create New Course Schedule">
    </form>
@stop
