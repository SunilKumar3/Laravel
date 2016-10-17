@extends('master')

@section('title', '| Create New Employee')

@section('stylesheets')

{!! Html::style('css/parsley.css')!!}

@endsection

@section('content')

<div class="row">
	<div class="col-md-4 col-md-offset-2">
	<h1>Create New Employee</h1>

	<hr>

	{!! Form::open(array('route' => 'employeepost.store')) !!}

	{{ Form::label('name','Name')}}
	{{ Form::text('name', null, array('class' => 'form-control'))}}

	{{ Form::label('username','Username')}}
	{{ Form::text('username', null, array('class' => 'form-control'))}}
	<br>

	{{ Form::label('password','Password')}}
	{{ Form::password('password', null, array('class' => 'form-control'))}}
	<br>

	{{ Form::label('address','Address')}}
	{{ Form::textarea('address', null, array('class' => 'form-control'))}}

	{{ Form::label('mobile','Mobile')}}
	{{ Form::text('mobile', null, array('class' => 'form-control'))}}

	{{ Form::label('email','Email')}}
	{{ Form::text('email', null, array('class' => 'form-control'))}}
	<br>

	{{ Form::label('dept_name','Dept_name')}}

	

	<?php echo Form::select('dept_name', array(
	'Default' => array('' => ''),
    'Hr' => array('Human Resource' => 'Human Resource'),
    'Ad' => array('Admin' => 'Admin'),
)); ?>

	<br> 

	
	{{ Form::label('role','Role')}}
	{{ Form::text('role', null, array('class' => 'form-control'))}}


	{{ Form::submit('Create New Employee', array('class' =>'btn btn-success btn-lg btn-block','style' => 'margin-top: 20px;'))}}

	{!! Form::close() !!}


	</div>
</div>

@endsection

@section('scripts')

{!! Html::script('js/parsley.min.js') !!}

@endsection
