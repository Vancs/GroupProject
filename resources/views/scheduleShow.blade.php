@extends('layouts/scheduleMaster')
<h2> Inside create a new Course Schedule</h2>
@section('content')
    ID: {{$Schedules->id}}
    <br />  Title: {{$Schedules->CRSRID}}
    <br />  Pages: {{$Schedules->Code}}
    <br />  Pages: {{$Schedules->Title}}
    <br />  Pages: {{$Schedules->Location}}
    <br />  Pages: {{$Schedules->SETime}}
    <br />  Pages: {{$Schedules->Instructor}}
    <br />  Pages: {{$Schedules->Comments}}
    <br />  Created At: {{$Schedules->created_at}}
    <br />  Updated On: {{$Schedules->updated_at}}


    <br />
    <br />
    <a href="/schedule" > Go Back to the Main Page </a>
@stop
