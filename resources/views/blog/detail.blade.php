@extends('layouts.app')
@section('content')
	<div>
		<h3>Blog Detail</h3>
		<div>
			<strong>Title: </strong>{{$blog->title}}
			<strong>Content: </strong>{{$blog->content}}
		</div>
		<div>
			<a href="{{ route('blogs.index') }}">Back</a>
		</div>
	</div>
@endsection