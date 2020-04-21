@extends('layouts/scheduleMaster2')
@section('content')
    <form action="/schedule{{$schedules->id}}" method="post">
        @csrf
        {{ method_field('PATCH') }}
        ID: {{$schedules->id}}

        <br />Semester and year: <input class="form-control" type="text" name="semester_and_year" value="{{$schedules -> semester_and_year}}">
        <br /> Course ID: <input class="form-control" type="number" name="CRSRID" value="{{$schedules -> CRSRID }}">
        <br /> Code: <input class="form-control" type="number" name="Code" value="{{$schedules -> code }}">
        <br /> Title: <input class="form-control" type="text" name="Title" value="{{$schedules -> title }}">
        <br /> Credit: <input class="form-control" type="text" name="credit" value="{{$schedules -> credit }}">
        <br />Start Date: <input class="form-control" type="date" name="start_date" value="{{$schedules -> start_date }}">
        <br /> End Date: <input class="form-control" type="date" name="end_date" value="{{$schedules -> end_date }}">
        <br />Class Days: <input class="form-control" type="text" name="class_days" value="{{$schedules -> class_days }}">
        <br /> Class Time: <input class="form-control" type="time" name="class_time" value="{{$schedules -> class_time }}">
        <br /> Final Day: <input class="form-control" type="date" name="final_day" value="{{$schedules -> final_day }}">
        <br /> Final Time: <input class="form-control" type="time" name="final_time" value="{{$schedules -> final_time }}">
        <br />  Enrollment: <input class="form-control" type="text" name="enrollment" value="{{$schedules -> enrollment }}">
        <br /> Instructor: <select class="form-control" name="instructor_id">
          @foreach ($instructors as $instructor)
          <option class="form-control" name="instructor_id" value="{{$instructor['id'] }}"> {{$instructor['name']}}</option>
          @endforeach
          </select>

        <br />  Building: <input class="form-control" type="number" name="location_id" value="{{$schedules -> location_id }}">
        <br /> Comments: <input class="form-control" type="text" name="Comments" value="{{$schedules -> comments }}">
        <br /> <button class="btn btn-success" type="submit" value="Update This Course"> Update This Course </button>
        <br />    <a href="/schedule" > Go Back to the Main Page </a>

    </form>
@stop
