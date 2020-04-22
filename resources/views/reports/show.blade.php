@extends('layouts.MasterLayout.NavLayout')
@section('title','Show Report')
@section('content')
<h2> This is the data:
  @foreach($courses as $course)
    {{$course->id}}
    {{$course->title}}
    {{$course->enrollment}}
  @endforeach
</h2>


@endsection
