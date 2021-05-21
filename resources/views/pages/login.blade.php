
@include('layout.stylrlogin')
@extends('layout.master')
@section('title',$page)
    
@section('navbar')
@parent
<div class="login-wrap">
	<div class="login-html">
		<label for="tab-1" class="tab">Sign In</label>
	<label for="tab-2" class="tab"><a class="nav-link" href="{{route('signup')}}">Sign Up</a></label>
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
				
				<div class="group">
					<input type="submit" class="button" value="Sign In">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">Forgot Password?</a>
				</div>
			</div>
			
		</div>
	</div>
</div>
@endsection
@section('content')
    
  
   
       
    @endsection