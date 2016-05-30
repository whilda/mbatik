@extends('layouts.account')

@section('title')
	Login Account
@endsection

@section('content')
    <div class="login">
      <div class="login__check"></div>
      <div class="login__form">
      	<form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
      		{!! csrf_field() !!}
      		@if ($errors->has('email'))
      			<span class="help-block">
					<strong>{{ $errors->first('email') }}</strong>
				</span>
			@endif
	        <div class="login__row">
	          <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
	            <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
	          </svg>
	          <input name="email" type="email" class="login__input name" placeholder="Email" value="{{ old('email') }}"/>
	        </div>
	        <div class="login__row">
	          <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
	            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
	          </svg>
	          <input name="password" id="password" type="password" class="login__input pass" placeholder="Password"/>
				@if ($errors->has('password'))
					<span class="help-block">
						<strong>{{ $errors->first('password') }}</strong>
					</span>
				@endif
	        </div>
	        <div class="login__row">
	        	<table class="login__input">
	        		<tr>
	        			<td width="30px"><input type="checkbox" name="remember"></td>
	        			<td>Remember Me</td>
	        		</tr>	        		
	        	</table>	        			    		        
	        </div> 
	        <button type="submit" class="login__submit">Sign in</button>
	        <!-- <p class="login__signup">Don't have an account? &nbsp;<a href="{{ url('/register') }}">Sign up</a></p> -->	          
        </form>
      </div>
    </div>
@endsection