@extends('layouts.app')
@section('content')
<div class="container my-4">

	@if ($message =Session::get('success'))
		<div class="alert alert-info text-center" role="alert">
			<p>{{$message}}</p>
		</div>
	@endif
	<div class="row">
		<div class="col-md-8">
			@foreach ($blogs as $blog)
				<div class="border rounded my-2 bg-white p-3">
					<div class="row justiy-center">
						<div class="col-md-10"><h5>Username</h5></div>
						<div class="col-md-2">
							<div class="dropdown text-right">
							  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							    Options
							  </button>
							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							  	<form action="{{ route('blogs.destroy', $blog->id) }}" method="post">
										<a class="dropdown-item" href="{{ route('blogs.edit', $blog->id) }}">Edit</a>
										@csrf
										@method('DELETE')
										<button class="dropdown-item" class="btn" type="submit">Delete</button>
									</form>
							  </div>
							</div>
						</div>
					</div>
					{{$blog->title}}<br>
					{{$blog->content}}<br>			
					{{$blog->images}}	
				</div>
					
			@endforeach
				
			{!! $blogs->links() !!}
		</div>
		<div class="col-md-3 fixed-right float-right">
			<h5>Username</h5>
			<h5 class="text-secondary">SUGGESTIONS FOR YOU</h5>
		</div>
	</div>
</div>
@endsection