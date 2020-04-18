@extends('layouts/scheduleMaster2')
<h2> Update The Course Schedule</h2>
@section('content')
    <form action="/schedule{{$schedules->id}}" method="post">
        @csrf
        {{ method_field('PATCH') }}
        ID: {{$schedules->id}}

        <br />Semester and year: <input type="text" name="semester_and_year" value="{{old('semester_and_year')}}">
        <br /> Course ID: <input type="number" name="CRSRID" value="{{old('CRSRID')}}">
        <br /> Code: <input type="number" name="Code" value="{{old('Code')}}">
        <br /> Title: <input type="text" name="Title" value="{{old('Title')}}">
        <br /> Credit: <input type="text" name="credit" value="{{old('credit')}}">
        <br /> Start Date: <input type="date" name="start_date" value="{{old('start_date')}}">
        <br /> End Date: <input type="date" name="end_date" value="{{old('end_date')}}">
        <br /> Class Days: <input type="text" name="class_days" value="{{old('class_days')}}">
        <br /> Class Time: <input type="time" name="class_time" value="{{old('class_time')}}">
        <br /> Final Day: <input type="date" name="final_day" value="{{old('final_day')}}">
        <br /> Final Time: <input type="time" name="final_time" value="{{old('final_time')}}">
        <br />  Enrollment: <input type="text" name="enrollment" value="{{old('enrollment')}}">
        <br />  Instructor ID: <input type="number" name="instructor_id" value="{{old('instructor_id')}}">
        <br />  Location ID: <input type="number" name="location_id" value="{{old('location_id')}}">
        <br /> Comments: <input type="text" name="Comments" value="{{old('Comments')}}">
        <br /> <input type="submit" value="Update This Course">
        <br /> <a href="/schedule" > Go Back to the Main Page </a>
    </form>
@stop
