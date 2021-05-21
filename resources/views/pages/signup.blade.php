
@include('layout.stylrlogin')
@extends('layout.master')
@section('title',$page)
    
@section('navbar')
@parent
<div class="form-group">

	{{ Form::open(array('url' => 'signup')) }} 
	
	 
		 {{ Form::label('username', 'Username',null, ['class' => 'form-control'])}} 
	{{ Form::text('username',null, ['class' => 'form-control'])}}
		  <div class="form-group">
	 {{ Form::label('email', 'E-Mail Address' ,null, ['class' => 'form-control']) }} 
	{{ Form::text('email', null, ['class' => 'form-control'])}}
	</div><div class="form-group">
	 {{ Form::label('password', 'Password', null, ['class' => 'form-control'])}} 
	{{ Form::text('password', null, ['class' => 'form-control'])}}
	</div>

	

	
	
	
	{{  Form::submit('signup!', ['class' => 'btn btn-primary'])}} 
	
	{{ Form::close() }}
	
	 
		
	   
	   
	</div>

@endsection
@section('content')
    
  
   
       
    @endsection