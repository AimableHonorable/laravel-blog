@extends('layouts.app')
@section('content')

	<div class="card col-md-5 mx-auto px-0 mt-4">
		<div class="card-header text-center">
			<h3>Edit Your Post</h3>
		</div>
		@if ($errors->any())
			<div class="alert alert-danger">
				<strong>Whoops!</strong> There is some problem causing this record not to be created!!!
				<ul>
					@foreach($errors as $error)
						<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
		@endif
		<div class="card-body">
			<form action="{{route('blogs.update', $blog->id)}}" method="post">
			@csrf
			@method('PUT')
			<div class="form-group mb-0">
				<label>Ttle</label><br>
				<input class="form-control" type="text" name="title" value="{{$blog->title}}"><br>
			</div>
			<div class="form-group mb-0">
				<label>Content</label><br>
				<textarea class="form-control" rows="8" cols="50" name="content">{{$blog->content}}</textarea><br>
			</div>
			
			<button class="form-control btn btn-info text-white" type="submit">UPDATE</button>
		</form>
		</div>
		
	</div>
@endsection