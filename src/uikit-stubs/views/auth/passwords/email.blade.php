@extends('layouts.app') 

@section('content')
<div class="uk-container uk-margin-large uk-flex uk-flex-center">
	<div class="uk-card uk-card-default uk-width-1-2@s">
		<div class="uk-card-header">
			<h3 class="uk-card-title uk-margin-remove">Login</h3>
		</div>

		@if (session('status'))
		<div class="uk-alert-success" uk-alert>
			<a class="uk-alert-close" uk-close></a>
			{{ session('status') }}
		</div>
		@endif

		<form class="uk-form-stacked" method="POST" action="{{ route('password.email') }}">
			{{ csrf_field() }}
			<div class="uk-card-body">
				<div class="uk-margin">
					<label class="uk-form-label {{ $errors->has('email') ? ' uk-text-danger' : '' }}">
						E-Mail Address
					</label>
					<div class="uk-width-1-1 uk-inline">
						<span class="uk-form-icon {{ $errors->has('email') ? ' uk-text-danger' : '' }}" uk-icon="icon: user">
						</span>
						<input id="email" type="email" class="uk-input {{ $errors->has('email') ? ' uk-form-danger' : '' }}"
						 name="email" value="{{ old('email') }}" required autofocus>
					</div>
					@if ($errors->has('email'))
					<span class="uk-text-small uk-text-danger">{{ $errors->first('email') }}</span>
					@endif
				</div>
			</div>
			<div class="uk-card-footer uk-clearfix">
				<button type="submit" class="uk-button uk-button-primary uk-width-1-1 uk-box-shadow-medium">
					Send Password Reset Link
				</button>
			</div>
		</form>
	</div>
</div>
@endsection