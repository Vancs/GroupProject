@extends('layouts/scheduleMaster')
<h2> Inside Update Course Schedule</h2>
@section('content')
    <form action="/schedule{{$Schedules->id}}" method="post">
        @csrf
        {{ method_field('PATCH') }}
        ID: {{$Schedules->id}}

        CRS ID: <input type="text" name="title" value="{{old('CRSRID')}}">
        Code: <input type="text" name="pages" value="{{old('Code')}}">
        Title: <input type="text" name="pages" value="{{old('Title')}}">
        Location: <input type="text" name="pages" value="{{old('Location')}}">
        SETime: <input type="text" name="pages" value="{{old('SETime')}}">
        Instructor: <input type="text" name="pages" value="{{old('Instructor')}}">
        Comments: <input type="text" name="pages" value="{{old('Comments')}}">
        <input type="submit" value="Update This Course">
    </form>
@stop
