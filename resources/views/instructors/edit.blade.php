@extends('layouts.MasterLayout.NavLayout')
@section('title','Edit Instructor')
@section('content')
	<div class="row">
		<div class="col-sm-8 offset-sm-2">
			<form action="{{route('instructors.update')}}" method = "post">
				@csrf
				<div class="form-group">
					<label for="name">Name:</label>
					<input type="text" name = "name" id = "name" class="form-control" required value = "{{$instructor->name}}">
				</div>
				<input type="hidden" name="id" value = "{{$instructor->id}}">
				<button type = "submit" class = "btn btn-success">Submit</button>
			</form>
		</div>
	</div>
@endsection
