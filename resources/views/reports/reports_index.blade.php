@extends('layouts.MasterLayout.NavLayout')
@section('title','Reports Index')
@section('content')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
   </head>
  <body>
    <div class="container">
    <br />
      @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
      @endif
     <h2>Index Page</h2>
    <table class="table table-bordered">
    <thead>
      <tr>
        <th>@sortablelink('id')</th>
        <th>@sortablelink('CRSRID')</th>
        <th>@sortablelink('semester_and_year')</th>
        <th>@sortablelink('created_at')</th>
        <th>@sortablelink('updated_at')</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($courses as $course)
      <tr>
        <td>{{$course->id}}</td>
        <td>{{$course->CRSRID}}</td>
        <td>{{$course->semester_and_year}}</td>
        <td>{{$course->created_at}}</td>
        <td>{{$course->updated_at}}</td>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {!! $courses->appends(\Request::except('page'))->render() !!}
  </div>
  </body>
</html>