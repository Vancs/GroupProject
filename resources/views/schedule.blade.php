@extends('layouts/scheduleMaster')
@section('content')

    @foreach($Schedules as $b)
        <tr>
            <td>{{$b->id}}</td>
            <td>{{$b->CRSRID}}</td>
            <td>{{$b->Code}}</td>
            <td>{{$b->Title}}</td>
            <td>{{$b->Location}}</td>
            <td>{{$b->SETime}}</td>
            <td>{{$b->Instructor}}</td>
            <td>{{$b->Comments}}</td>
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
                <form method="get" action="/schedule/{{$b->id}}">
                    @csrf
                    <input type="submit" value="Show:  {{$b->id}}">
                </form>
            </td>
        </tr>
    @endforeach
@stop('content')
