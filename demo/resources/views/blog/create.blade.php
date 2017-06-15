@extends('layouts.master')

@section('header')
<p></p>
	<h2>New Record</h2>

@stop

@section('content')

	{!! Form::open(['url'=>'blog', 'class'=>'form-horizontal']) !!}

		<div class="form-group">
			{!! Form::label('title', 'Title', ['class'=>'control-label col-md-2']) !!}
			<div class="col-md-10">
			{!! Form::text('title', null, ['class'=>'form-control']) !!}
			
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('description', 'Description', ['class'=>'control-label col-md-2']) !!}
			<div class="col-md-10">
				{!! Form::textarea('description', null, ['class'=>'form-control']) !!}

			</div>
		</div>
	
		<div class="form-group">
			<div class="col-md-offset-2 col-md-10">
				{!! Form::submit('save', ['class'=>'btn btn-primary']) !!}
			</div>
		</div>

	{!! Form::close() !!}

@stop

