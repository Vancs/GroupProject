@extends('layouts.MasterLayout.NavLayout')
@section('title','Locations Index')
@section('content')
<div class="table-title">
    <div class="row">
        <div class="col-lg-6">
            <h2>School <b>Location</b></h2>
        </div>
        <div class="col-sm-6">
          <a href="{{ route('locations.create', $locations->first())}}" class="btn btn-success">Create</a>
          </div>
   </div>
</div>
  <div class="row">
    <div class="col-sm-12">
      <table class="table">
        <tr class = "text-center">
          <th>ID</th>
          <th>Campus</th>
          <th>Building</th>
          <th>Room</th>
        </tr>
        @foreach($locations as $location)
          <tr class = "text-center">
            <td>{{ $location->id }}</td>
            <td>{{ $location->campus }}</td>
            <td>{{ $location->building }}</td>
            <td>{{ $location->room }}</td>
            <td><a href="{{route('locations.edit',['id'=>$location->id])}}" class = "btn btn-warning">Edit</a></td>
            <td><a href="{{route('locations.destroy',['id'=>$location->id])}}" class = "btn btn-danger">Delete</a></td>
          </tr>
        @endforeach
      </table>
    </div>
  </div>
  <br/>
@endsection
