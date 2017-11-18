<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>        
            html, body {
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
            }

            .title {
                font-size: 84px;
            }
        </style>
    </head>
    <body>
        <div class="uk-flex uk-flex-center uk-flex-middle uk-position-relative uk-height-viewport uk-background-muted">
            @if (route('login'))
                <div class="links uk-position-top-right uk-position-small">
                    @guest
                        <a href="{{ route('login') }}" class="uk-text-bold uk-text-primary uk-button uk-button-default uk-box-shadow-small">Login</a>
                        <a href="{{ route('register') }}" class="uk-text-bold uk-text-primary uk-button uk-button-default uk-box-shadow-small">Register</a>
                    @else
                        <a href="{{ url('/home') }}" class="uk-text-bold uk-button uk-button-default uk-box-shadow-small">Home</a>
                    @endguest
                </div>
            @endif

            <div class="uk-align-center">
                <div class="title uk-animation-slide-bottom uk-text-primary">
                    {{ config('app.name', 'Laravel UIkit 3') }}
                </div>
            </div>
        </div>
    </body>
</html>
