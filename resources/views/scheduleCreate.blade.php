@extends('layouts.scheduleMaster')
<h2> Inside create a new Course Schedule</h2>
@section('content')
    <form method="post" action="{{ route('schedules.store') }}">
        @csrf
        Semester and year: <input type="text" name="semester_and_year" value="{{old('semester_and_year')}}">
        <p style="color: red">{{$errors->first('semester_and_year')}}</p>
        Course ID: <input type="number" name="CRSRID" value="{{old('CRSRID')}}">
        <p style="color: red">{{$errors->first('CRSRID')}}</p>
        Code: <input type="number" name="Code" value="{{old('Code')}}">
        <p style="color: red">{{$errors->first('Code')}}</p>
        Title: <input type="text" name="Title" value="{{old('Title')}}">
        <p style="color: red">{{$errors->first('Title')}}</p>
        Credit: <input type="text" name="credit" value="{{old('credit')}}">
        <p style="color: red">{{$errors->first('credit')}}</p>
        Start Date: <input type="date" name="start_date" value="{{old('start_date')}}">
        <p style="color: red">{{$errors->first('start_date')}}</p>
        End Date: <input type="date" name="end_date" value="{{old('end_date')}}">
        <p style="color: red">{{$errors->first('end_date')}}</p>
        Class Days: <input type="text" name="class_days" value="{{old('class_days')}}">
        <p style="color: red">{{$errors->first('class_days')}}</p>
        Class Time: <input type="time" name="class_time" value="{{old('class_time')}}">
        <p style="color: red">{{$errors->first('class_time')}}</p>
        Final Day: <input type="date" name="final_day" value="{{old('final_day')}}">
        <p style="color: red">{{$errors->first('final_day')}}</p>
        Final Time: <input type="time" name="final_time" value="{{old('final_time')}}">
        <p style="color: red">{{$errors->first('final_time')}}</p>
        Enrollment: <input type="text" name="enrollment" value="{{old('enrollment')}}">
        <p style="color: red">{{$errors->first('enrollment')}}</p>
        Instructor ID: <input type="number" name="instructor_id" value="{{old('instructor_id')}}">
        <p style="color: red">{{$errors->first('instructor_id')}}</p>
        Location ID: <input type="number" name="location_id" value="{{old('location_id')}}">
        <p style="color: red">{{$errors->first('location_id')}}</p>
        Comments: <input type="text" name="Comments" value="{{old('Comments')}}">
        <p style="color: red">{{$errors->first('Comments')}}</p>
        <input type="submit" value="Create New Course Schedule">
    </form>
@stop
