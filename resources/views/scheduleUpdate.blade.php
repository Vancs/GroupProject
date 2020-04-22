@extends('layouts/scheduleMaster2')
@section('title','Edit Schedule')
@section('content')
    <form action="{{route('schedules.update')}}" method="post">
        @csrf
        {{ method_field('POST') }}
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
          <option selected="true" disabled="disabled">Choose an instructor</option>
          @foreach ($instructors as $instructor)
          <option class="form-control" name="instructor_id" value="{{$instructor['id'] }}"> {{$instructor['name']}}</option>
          @endforeach
          </select>
        <br />  Building: <select class="form-control" name="location_id">
          <option selected="true" disabled="disabled">Choose a building</option>
          @foreach ($locations as $location)
        <option class="form-control" name="location_id" value="{{ $location['id'] }}"> {{$location['building']}}</option>
          @endforeach
        </select>
        <br /> Comments: <textarea class="form-control" type="text" name="Comments" value="{{$schedules -> comments }}">{{$schedules -> comments }}</textarea>
        <input type="hidden" name="id" value = "{{$schedules->id}}">
        <br /> <button class="btn btn-success" type="submit"> Update This Course </button>
      </form>
        <br />    <a href="/schedule" > Go Back to the Main Page </a>

@stop
