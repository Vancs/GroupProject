@extends('layouts.scheduleMaster')
@section('content')
<div class="table-title">
    <div class="row">
        <div class="col-lg-6">
            <h2>Course<b>Schedules</b></h2>
        </div>
        <div class="col-sm-6">
          <a href="{{ route('schedules.create', $Schedules->first())}}" class="btn btn-primary">Create</a>
            <!--<a href="{{ route('schedules.create', $Schedules->first())}}" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add A New Course</span></a>
        --></div>
   </div>
</div>
    @foreach($Schedules as $b)
        <tr>
            <td>{{$b->id}}</td>
            <td>{{$b->semester_and_year}}</td>
            <td>{{$b->CRSRID}}</td>
            <td>{{$b->code}}</td>
            <td>{{$b->title}}</td>
            <td>{{$b->credit}}</td>
            <td>{{$b->start_date}}</td>
            <td>{{$b->end_date}}</td>
            <td>{{$b->class_days}}</td>
            <td>{{$b->class_time}}</td>
            <td>{{$b->final_day}}</td>
            <td>{{$b->final_time}}</td>
            <td>{{$b->enrollment}}</td>
            <td>{{$b->instructor_id}}</td>
            <td>{{$b->location_id}}</td>
            <td>{{$b->comments}}</td>
            <td>
                <form method="post" action="/schedule/{{$b->id}}">
                    @csrf
                    {{method_field('DELETE')}}
                    <input type="submit" value="Delete {{$b->id}}">
                </form>
            </td>
            <td>
                <form method="get" action="/schedule/{{$b->id}}/edit">
                    @csrf
                    <input type="submit" value="Update {{$b->id}}">
                </form>
            </td>
            <td>
                <form method="get" action="/schedule/{{$b->id}}/show">
                    @csrf
                    <input type="submit" value="Show:  {{$b->id}}">
                </form>
            </td>
        </tr>
    @endforeach
@stop('content')
