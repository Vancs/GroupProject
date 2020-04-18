@extends('layouts.MasterLayout.NavLayout')
@section('title','Create Instructor')
@section('content')
	<div class="row mt-5">
		<div class="col-sm-8 offset-sm-2">
			<form action="{{route('instructors.store')}}" method = "post">
				@csrf
				<div class="form-group">
					<label for="name">Name:</label>
					<input type="text" name = "name" id = "name" class="form-control" required>
				</div>
				<button type = "submit" class = "btn btn-success">Submit</button>
			</form>
		</div>
	</div>
@endsection
