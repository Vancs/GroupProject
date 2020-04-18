@extends('layouts.scheduleMaster')
<h2> Inside Update Course Schedule</h2>
@section('content')
    <form action="/schedule{{$schedules->id}}" method="post">
        @csrf
        {{ method_field('PATCH') }}
        ID: {{$schedules->id}}

        Semester and year: <input type="text" name="semester_and_year" value="{{old('semester_and_year')}}">
        Course ID: <input type="number" name="CRSRID" value="{{old('CRSRID')}}">
        Code: <input type="number" name="Code" value="{{old('Code')}}">
        Title: <input type="text" name="Title" value="{{old('Title')}}">
        Credit: <input type="text" name="credit" value="{{old('credit')}}">
        Start Date: <input type="date" name="start_date" value="{{old('start_date')}}">
        End Date: <input type="date" name="end_date" value="{{old('end_date')}}">
        Class Days: <input type="text" name="class_days" value="{{old('class_days')}}">
        Class Time: <input type="time" name="class_time" value="{{old('class_time')}}">
        Final Day: <input type="date" name="final_day" value="{{old('final_day')}}">
        Final Time: <input type="time" name="final_time" value="{{old('final_time')}}">
        Enrollment: <input type="text" name="enrollment" value="{{old('enrollment')}}">
        Instructor ID: <input type="number" name="instructor_id" value="{{old('instructor_id')}}">
        Location ID: <input type="number" name="location_id" value="{{old('location_id')}}">
        Comments: <input type="text" name="Comments" value="{{old('Comments')}}">
        <input type="submit" value="Update This Course">
    </form>
@stop
