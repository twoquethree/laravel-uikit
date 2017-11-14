@extends('layouts.app')

@section('content')
  <div class="uk-container uk-margin-large uk-flex uk-flex-center">
    <div class="uk-card uk-card-default uk-width-1-2@s">
      <div class="uk-card-header">
        <h3 class="uk-card-title uk-margin-remove">Login</h3>
      </div>
      <form class="uk-form-stacked" method="POST" action="{{ route('login') }}" novalidate>
        {{ csrf_field() }}
      <div class="uk-card-body">
          <div class="uk-margin">
            <label class="uk-form-label {{ $errors->has('email') ? ' uk-text-danger' : '' }}">
              E-Mail Address
            </label>
            <div class="uk-width-1-1 uk-inline">
              <span class="uk-form-icon {{ $errors->has('email') ? ' uk-text-danger' : '' }}"
                    uk-icon="icon: user">
              </span>
              <input id="email"
                     type="email"
                     class="uk-input {{ $errors->has('email') ? ' uk-form-danger' : '' }}"
                     name="email"
                     value="{{ old('email') }}"
                     required
                     autofocus>
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
              <input id="password"
                     type="password"
                     class="uk-input {{ $errors->has('password') ? ' uk-form-danger' : '' }}"
                     name="password"
                     required>
            </div>
            @if ($errors->has('password'))
              <span class="uk-text-small uk-text-danger">{{ $errors->first('password') }}</span>
            @endif
          </div>

          <div class="margin uk-inline uk-float-right">
            <label>
              <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} class="uk-checkbox">
            Remember Me
          </label>
          </div>

      </div>
        <div class="uk-card-footer uk-clearfix">
          <button type="submit" class="uk-button uk-button-primary uk-box-shadow-medium">
            Login
          </button>
        </div>
      </form>
      </div>
    </div>
  </div>
@endsection
