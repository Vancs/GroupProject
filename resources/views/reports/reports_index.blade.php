@extends('layouts.MasterLayout.NavLayout')
@section('title','Reports Index')
@section('content')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Reports</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
   </head>
  <body>
    <div class="container">
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
        <th>@sortablelink('semester_and_year')</th>
        <th>@sortablelink('code')</th>
        <th>@sortablelink('title')</th>
        <th>@sortablelink('enrollment')</th>
      </tr>
    </thead>
    <tbody>

      @foreach($reports as $report)
      <tr>
        <td>{{$report->semester_and_year}}</td>
        <td>{{$report->code}}</td>
        <td>{{$report->title}}</td>
        <td>{{$report->enrollment}}</td>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  
  </div>
  <br/>
  @endsection
