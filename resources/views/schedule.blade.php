@extends('layouts.scheduleMaster')
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
            <td>
                <form method="post" action="/schedule/{{$b->id}}">
                    @csrf
                    {{method_field('DELETE')}}
                    <button class="btn btn-danger" type="submit" value="Delete {{$b->id}}"> Delete </button>
                </form>
            </td>
            <td>
                <form method="get" action="/schedule/{{$b->id}}/edit">
                    @csrf
                    <button class="btn btn-warning" type="submit" value="Update {{$b->id}}"> Update </button>
                </form>
            </td>
            <td>
                <form method="get" action="/schedule/{{$b->id}}/show">
                    @csrf
                    <button class="btn btn-primary" type="submit" value="Show:  {{$b->id}}"> Show </button>
                </form>
            </td>
        </tr>
    @endforeach
@stop('content')
