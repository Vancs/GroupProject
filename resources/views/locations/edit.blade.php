@extends('layouts.MasterLayout.NavLayout2')
@section('title','Edit Location')


@section('content')
    <br />
  <div class="row">
    <div class="col-sm-8 offset-sm-2">
      <form action="{{route('locations.update')}}" method = "post">
        @csrf
        <div class="form-group">
          <label for="campus">Campus:</label>
          <input type="text" name = "campus" id = "campus" class="form-control" required value = "{{$location->campus}}">
        </div>
        <div class="form-group">
          <label for="building">Building:</label>
          <input type="text" name = "building" id = "building" class="form-control" required value = "{{$location->building}}">
        </div>
        <div class="form-group">
          <label for="room">Room:</label>
          <input type="text" name = "room" id = "room" class="form-control" required value = "{{$location->room}}">
        </div>
        <input type="hidden" name="id" value = "{{$location->id}}">
        <button type = "submit" class = "btn btn-success">Submit</button>
      </form>
    </div>
  </div>
@endsection
