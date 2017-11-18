@extends('layouts.app') 

@section('content')
<div class="uk-container uk-margin-large uk-flex uk-flex-center">
	<div class="uk-card uk-card-default uk-width-1-2@s">
		<div class="uk-card-header">
			<h3 class="uk-card-title uk-margin-remove">Reset Password</h3>
		</div>
		<form class="uk-form-stacked" method="POST" action="{{ route('password.request') }}">
			{{ csrf_field() }}

			<input type="hidden" name="token" value="{{ $token }}">
			<div class="uk-card-body">
				<div class="uk-margin">
					<label class="uk-form-label {{ $errors->has('email') ? ' uk-text-danger' : '' }}">
						E-Mail Address
					</label>
					<div class="uk-width-1-1 uk-inline">
						<span class="uk-form-icon {{ $errors->has('email') ? ' uk-text-danger' : '' }}" uk-icon="icon: user">
						</span>
						<input id="email" type="email" class="uk-input {{ $errors->has('email') ? ' uk-form-danger' : '' }}"
						 name="email" value="{{ $email or old('email') }}" required autofocus>
					</div>
					@if ($errors->has('email'))
					<span class="uk-text-small uk-text-danger">{{ $errors->first('email') }}</span>
					@endif
				</div>
				<div class="uk-margin">
					<label class="uk-form-label {{ $errors->has('password') ? ' uk-text-danger' : '' }}">
						Password
					</label>
					<div class="uk-width-1-1 uk-inline">
						<span class="uk-form-icon {{ $errors->has('password') ? ' uk-text-danger' : '' }}"
						 uk-icon="icon: lock">
						</span>
						<input id="password" type="password" class="uk-input {{ $errors->has('password') ? ' uk-form-danger' : '' }}"
						 name="password" required>
					</div>
					@if ($errors->has('password'))
					<span class="uk-text-small uk-text-danger">{{ $errors->first('password') }}</span>
					@endif
				</div>
				<div class="uk-margin">
					<label class="uk-form-label {{ $errors->has('password_confirmation') ? ' uk-text-danger' : '' }}">
						Confirm Password
					</label>
					<div class="uk-width-1-1 uk-inline">
						<span class="uk-form-icon {{ $errors->has('password_confirmation') ? ' uk-text-danger' : '' }}"
						 uk-icon="icon: lock">
						</span>
						<input id="password" type="password" class="uk-input {{ $errors->has('password_confirmation') ? ' uk-text-danger' : '' }}"
						 name="password_confirmation" required>
					</div>
					@if ($errors->has('password_confirmation'))
					<span class="uk-text-small uk-text-danger">{{ $errors->first('password_confirmation') }}</span>
					@endif
				</div>
			</div>
			<div class="uk-card-footer uk-clearfix">
				<button type="submit" class="uk-button uk-button-primary uk-width-1-1 uk-box-shadow-medium">
					Reset Password
				</button>
			</div>
		</form>
	</div>
</div>
@endsection