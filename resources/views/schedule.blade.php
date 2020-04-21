@extends('layouts.scheduleMaster')
@section('title','Schedule')
@section('content')
<div class="table-title">
    <div class="row">
        <div class="col-lg-6">
            <h2>Course<b>Schedules</b></h2>
        </div>
        <div class="col-sm-6">
          <a href="{{ route('schedules.create', $Schedules->first())}}" class="btn btn-success">Create</a>
          </div>
   </div>
</div>
    @foreach($Schedules as $b)
        <tr>
            <td>{{$b->semester_and_year}}</td>
            <td>{{$b->code}}</td>
            <td>{{$b->title}}</td>
            <td>{{$b->credit}}</td>
            <td>{{$b->class_days}}</td>
            <td>{{$b->class_time}}</td>
            @foreach($instructors as $instructor)
            @if($b->instructor_id == $instructor['id'])
            <td>{{$instructor['name']}}</td>
            @endif
            @endforeach

            @foreach($locations as $location)
            @if($b->location_id == $location['id'])
            <td>{{$location['building']}}</td>
            @endif
            @endforeach
            <td>{{$b->comments}}</td>
            <td><a href="{{route('schedules.destroy',['id'=>$b->id])}}" class = "btn btn-danger">Delete</a></td>
            <td><a href="{{route('schedules.edit', $b->id) }}" class = "btn btn-warning">Edit</a></td>
            <td>
                <form method="get" action="/schedule/{{$b->id}}/show">
                    @csrf
                    <button class="btn btn-primary" type="submit" value="Show:  {{$b->id}}"> Show </button>
                </form>
            </td>
        </tr>
    @endforeach
@stop('content')
