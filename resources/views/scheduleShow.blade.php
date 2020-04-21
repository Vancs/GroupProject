@extends('layouts/scheduleMaster2')
@section('title','Show Schedule')

@section('content')
    ID: {{$Schedules->id}}
    <br />  Semester and year: {{$Schedules->semester_and_year}}
    <br />  Course ID: {{$Schedules->CRSRID}}
    <br />  Code: {{$Schedules->code}}
    <br />  Title: {{$Schedules->title}}
    <br />  Credit: {{$Schedules->credit}}
    <br />  Start Date: {{$Schedules->start_date}}
    <br />  End Date: {{$Schedules->end_date}}
    <br />  Class Days: {{$Schedules->class_days}}
    <br />  Class Time: {{$Schedules->class_time}}
    <br />  Final Day: {{$Schedules->final_day}}
    <br />  Final Time: {{$Schedules->final_time}}
    <br />  Enrollment: {{$Schedules->enrollment}}
    @foreach($instructors as $instructor)
    @if($Schedules->instructor_id == $instructor['id'])
    <br />  Instructor:{{$instructor['name']}}</td>
    @endif
    @endforeach
    @foreach($locations as $location)
    @if($Schedules->location_id == $location['id'])
    <br /> Building:{{$location['building']}}</td>
    @endif
    @endforeach
    <br />  Comments: {{$Schedules->comments}}
    <br />  Created At: {{$Schedules->created_at}}
    <br />  Updated On: {{$Schedules->updated_at}}


    <br />
    <br />
    <a href="/schedule" > Go Back to the Main Page </a>
@stop
