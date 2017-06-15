@extends('layouts.master')

@section('header')
	<h2>Blog Page</h2>
@stop

@section('content')
	<a href="blog/create" class="btn btn-primary">Add new</a>
	<hr/>
	<table class="table table-bordered table-responsive" style="margin-top: 10px;">
			<thead>
				<tr>
					<th>Sr. No</th>
					<th>Title</th>
					<th>Description</th>
					<th>Created at </th>
					<th colspan="2">Action</th>
				</tr>
	
			@foreach($blogs as $blog)
				<tr>
					<td>{{ $blog->id }}</td>
					<td>{{ $blog->title }}</td>
					<td>{{ $blog->description}}</td>
					<td>{{ $blog->created_at }}</td>
					<td>
						<a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-success">Edit</a>
					</td>
					<td>
						
						{!! Form::open(['method'=>'delete', 'route'=>['blog.destroy', $blog->id]]) !!}
						{!! Form::submit('Delete', ['class'=>'btn btn-danger', 'onclick'=>'return confirm()']) !!}
						{!! Form::close() !!}
					</td>
				</tr>
				@endforeach

			</thead>
	</table>
@stop
