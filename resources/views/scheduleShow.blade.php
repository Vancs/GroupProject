@extends('layouts/scheduleMaster')
<h2> Inside create a new Course Schedule</h2>
@section('content')
    ID: {{$Schedules->id}}
    <br />  Semester and year: {{$Schedules->semester_and_year}}
    <br />  Course ID: {{$Schedules->CRSRID}}
    <br />  Code: {{$Schedules->Code}}
    <br />  Title: {{$Schedules->Title}}
    <br />  Credit: {{$Schedules->credit}}
    <br />  Start Date: {{$Schedules->start_date}}
    <br />  End Date: {{$Schedules->end_date}}
    <br />  Class Days: {{$Schedules->class_days}}
    <br />  Class Time: {{$Schedules->class_time}}
    <br />  Final Day: {{$Schedules->final_day}}
    <br />  Final Time: {{$Schedules->final_time}}
    <br />  Enrollment: {{$Schedules->enrollment}}
    <br />  Instructor ID: {{$Schedules->instructor_id}}
    <br />  Location ID: {{$Schedules->location_id}}
    <br />  Comments: {{$Schedules->Comments}}
    <br />  Created At: {{$Schedules->created_at}}
    <br />  Updated On: {{$Schedules->updated_at}}


    <br />
    <br />
    <a href="/schedule" > Go Back to the Main Page </a>
@stop
