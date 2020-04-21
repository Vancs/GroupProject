@extends('layouts.MasterLayout.NavLayout')
@section('title','Reports Index')
@section('content')
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

      @foreach($reports as $report)
      <tr>
        <td>{{$report->id}}</td>
        <td>{{$report->CRSRID}}</td>
        <td>{{$report->semester_and_year}}</td>
        <td>{{$report->created_at}}</td>
        <td>{{$report->updated_at}}</td>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  
  </div>
  @endsection
