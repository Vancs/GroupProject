@extends('layouts.MasterLayout.NavLayout')
@section('title','Locations Index')
@section('content')
  <div class="row">
    <div class="col-sm-12">
      <table class="table">
        <tr>
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
            <td><a href="{{route('locations.edit',['id'=>$location->id])}}" class = "btn btn-info">Edit</a></td>
            <td><a href="{{route('locations.destroy',['id'=>$location->id])}}" class = "btn btn-danger">Delete</a></td>
          </tr>
        @endforeach
      </table>
    </div>
  </div>
@endsection
