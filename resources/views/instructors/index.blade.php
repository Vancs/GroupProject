@extends('layouts.MasterLayout.NavLayout')
@section('title','Instructors Index')
@section('content')
	<div class="row">
		<div class="col-sm-12">
			<table class="table">
				<tr class = "text-center">
					<th>ID</th>
					<th>Name</th>
				</tr>
				@foreach($instructors as $instructor)
					<tr class = "text-center">
						<td>{{ $instructor->id }}</td>
						<td>{{ $instructor->name }}</td>
						<td><a href="{{route('instructors.edit',['id'=>$instructor->id])}}" class = "btn btn-info">Edit</a></td>
						<td><a href="{{route('instructors.destroy',['id'=>$instructor->id])}}" class = "btn btn-danger">Delete</a></td>
					</tr>
				@endforeach
			</table>
			<a href="{{route('instructors.create',['id'=>$instructor->id])}}" class = "btn btn-success">Add a New Instructor</a>
		</div>
	</div>
@endsection