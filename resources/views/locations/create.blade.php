@extends('layouts.locationMaster')
@section('title','Create Location')
@section('content')
  <div class="row mt-5">
    <div class="col-sm-8 offset-sm-2">
      <form action="{{route('locations.store')}}" method = "post">
        @csrf
        <div class="form-group">
          <label for="campus">Campus:</label>
          <input type="text" name = "campus" id = "campus" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="building">Building:</label>
          <input type="text" name = "building" id = "building" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="room">Room:</label>
          <input type="text" name = "room" id = "room" class="form-control" required>
        </div>
        <button type = "submit" class = "btn btn-success">Submit</button>
      </form>
    </div>
  </div>
@endsection