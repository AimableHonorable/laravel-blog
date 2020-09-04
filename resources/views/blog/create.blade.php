@extends('layouts.app')
@section('content')
	<div class="card col-md-5 mx-auto px-0 mt-4">
		<div class="card-header text-center">
			<h3>New Post</h3>
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
			<form action="{{route('blogs.store')}}" method="post">
			@csrf
			<div class="form-group mb-0">
				<label>Ttle</label><br>
				<input class="form-control" type="text" name="title" placeholder="Title"><br>
			</div>
			<div class="form-group mb-0">
				<label>Content</label><br>
				<textarea class="form-control" rows="8" cols="50" name="content" placeholder="Content"></textarea><br>
			</div>
			<div class="form-group mb-4">
				<label>Image</label><br>
				<input type="file" class="form-control" name="images"/>
			</div>
			
			<button class="form-control btn btn-info text-white" type="submit">POST</button>
		</form>
		</div>
		
	</div>
@endsection