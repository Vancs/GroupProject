@extends('layouts.MasterLayout.NavLayout')
@section('title','Instructors Index')
@section('content')
	<div class="container">
    	<div class="table-wrapper">
        	<div class="table-title">
            	<div class="row">
                	<div class="col-lg-6">
                    	<h2>Instructors</b></h2>
                	</div>
									<div class="col-sm-6">
											<a href="{{ route('instructors.create', $instructors->first())}}" class="btn btn-success"><i class="material-icons">&#xE147;</i>Create</a>
                	</div>
           		</div>
			</div>
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
                </div>
            </div>
            <br/>
		</div>
	</div>


@endsection
