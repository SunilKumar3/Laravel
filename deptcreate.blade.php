@extends('master')

@section('title', '| Create New Department')

@section('stylesheets')

{!! Html::style('css/parsley.css')!!}

@endsection

@section('content')

<div class="row">
	<div class="col-md-8 col-md-offset-2">
	<h1>Create New Department</h1>

	<hr>

	{!! Form::open(array('route' => 'deptpost.store')) !!}

	{{ Form::label('dept_name','Dept_name')}}
	{{ Form::text('dept_name', null, array('class' => 'form-control'))}}

	{{ Form::label('dept_email','Dept_email')}}
	{{ Form::text('dept_email', null, array('class' => 'form-control'))}}

	{{ Form::submit('Create New Department', array('class' =>'btn btn-success btn-lg btn-block','style' => 'margin-top: 20px;'))}}

	{!! Form::close() !!}


	</div>
</div>

@endsection

@section('scripts')

{!! Html::script('js/parsley.min.js') !!}

@endsection
