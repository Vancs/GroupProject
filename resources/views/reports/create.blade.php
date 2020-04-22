@extends('layouts.MasterLayout.NavLayout')
@section('title','Create Report')
@section('content')
<form method="get" action="/reports/show ">
  @csrf
  {{ method_field('POST') }}
  <h3>Please select a course! </h3>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Course</label>
    <div class="col-sm-10">
      <select class="form-control" name="title">
        <option selected="true" disabled="disabled">Choose a course</option>
     @foreach ($Schedules as $schedule)
     <option class="form-control" value="{{$schedule['title']}}"> {{$schedule['title']}}</option>
     @endforeach
     </select>
    </div>
  </div>

  <!--<div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Course</label>
    <div class="col-sm-10">
      <select class="form-control" name="title">
        <option selected="true" disabled="disabled">Choose a year</option>
     @foreach ($year as $y)
     <option class="form-control" name="title" value="{{$y['semester_and_year']}}"> {{$y['semester_and_year']}}</option>
     @endforeach
     </select>
   </div>
   </div>-->
    <br><br><br>
    <button type="submit" class="btn btn-success"> Submit </button>
</form>
@endsection
