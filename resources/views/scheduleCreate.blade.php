@extends('layouts/scheduleMaster2')
<h2> Create A New Course Schedule</h2>
@section('content')
    <form method="post" action="{{ route('schedules.store') }}">
        @csrf
        Semester and year: <input class="form-control" type="text" name="semester_and_year" value="{{old('semester_and_year')}}">
        <p style="color: red">{{$errors->first('semester_and_year')}}</p>
        Course ID: <input class="form-control" type="number" name="CRSRID" value="{{old('CRSRID')}}">
        <p style="color: red">{{$errors->first('CRSRID')}}</p>
        Code: <input class="form-control" type="number" name="Code" value="{{old('Code')}}">
        <p style="color: red">{{$errors->first('Code')}}</p>
        Title: <input class="form-control" type="text" name="Title" value="{{old('Title')}}">
        <p style="color: red">{{$errors->first('Title')}}</p>
        Credit: <input class="form-control" type="text" name="credit" value="{{old('credit')}}">
        <p style="color: red">{{$errors->first('credit')}}</p>
        Start Date: <input class="form-control" type="date" name="start_date" value="{{old('start_date')}}">
        <p style="color: red">{{$errors->first('start_date')}}</p>
        End Date: <input class="form-control" type="date" name="end_date" value="{{old('end_date')}}">
        <p style="color: red">{{$errors->first('end_date')}}</p>
        Class Days: <input class="form-control" type="text" name="class_days" value="{{old('class_days')}}">
        <p style="color: red">{{$errors->first('class_days')}}</p>
        Class Time: <input class="form-control" type="time" name="class_time" value="{{old('class_time')}}">
        <p style="color: red">{{$errors->first('class_time')}}</p>
        Final Day: <input class="form-control" type="date" name="final_day" value="{{old('final_day')}}">
        <p style="color: red">{{$errors->first('final_day')}}</p>
        Final Time: <input class="form-control" type="time" name="final_time" value="{{old('final_time')}}">
        <p style="color: red">{{$errors->first('final_time')}}</p>
        Enrollment: <input class="form-control" type="text" name="enrollment" value="{{old('enrollment')}}">
        <p style="color: red">{{$errors->first('enrollment')}}</p>
         Instructor: <select class="form-control" name="instructor_id">
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
        <p style="color: red">{{$errors->first('Comments')}}</p>
        <input type="submit" value="Create New Course Schedule">
        <br /> <a href="/schedule" > Go Back to the Main Page </a>
    </form>
@stop
