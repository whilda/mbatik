@extends('layouts.account')

@section('title')
	<title>Register Account</title>
@endsection

@section('content')
    <div class="login">
      <div class="login__check"></div>
      <div class="register__form">
      	<form method="post" action="{{url('register')}}">
      		{!! csrf_field() !!}
	        <div class="login__row">
	          <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
	            <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
	          </svg>
	          <input name="name" type="text" class="login__input name" placeholder="Name" value="{{ old('name') }}"/>
				@if ($errors->has('name'))
					<span class="help-block">
						<strong>{{ $errors->first('name') }}</strong>
					</span>
				@endif
	        </div>
	        <div class="login__row">
	          <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
	            <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
	          </svg>
	          <input name="email" type="email" class="login__input name" placeholder="Email" value="{{ old('email') }}"/>
			  @if ($errors->has('email'))
					<span class="help-block">
						<strong>{{ $errors->first('email') }}</strong>
					</span>
				@endif
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
	          <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
	            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
	          </svg>
	          <input name="password_confirmation" type="password" class="login__input pass" placeholder="Confirm Password"/>
	         @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
			</div>
	        <div class="login__row"> 
	        <button type="submit" class="login__submit">Register</button>	          
        </form>
      </div>
    </div>
@endsection
