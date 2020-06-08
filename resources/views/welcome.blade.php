<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: rgb(0, 0, 0, 0.5);
                color: #fff;
                font-family: 'Nunito', sans-serif;
                font-weight: bold;
                height: 100vh;
                margin: 0;
            }

            .overlay {
                position: absolute;
                content:"";
                top:0;
                left:0;
                width:100%;
                height:100%;
                opacity:.5;
                /* background-color: #525258; */
            }

            #bg {
                position: fixed; 
                top: -50%; 
                left: -50%; 
                width: 200%; 
                height: 200%;
            }

            #bg img {
                position: absolute; 
                top: 0; 
                left: 0; 
                right: 0; 
                bottom: 0; 
                margin: auto; 
                min-width: 50%;
                min-height: 50%;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
                font-weight: bold;
                /* background-color: rgba(0, 0, 0, 0.5); */
            }

            .links > a {
                color: #fff;
                padding: 0 25px;
                font-size: 20px;
                font-weight: bold;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .links > a:hover {
                background-color: cadetblue;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="overlay" id="bg">
            <img src="{{asset('images/traffic.jpg')}}" alt="">
        </div>

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/application') }}">Start</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Vehicle Permit System
                </div>

                <div class="links">
                    <a href="{{ route('register') }}">Apply for your vehicle permit</a>
                    <a href="{{route('Apply')}}">Applied already? check the progress</a>
                    @if (auth()->check() && auth()->user()->IsAdmin == 1)
                        <a href="{{route('approval1')}}">Check Approval queue</a>
                    @endif
                    @if (auth()->check() && auth()->user()->IsSupervisor == 1)
                        <a href="{{route('approval2')}}">Check Approval queue</a>
                    @endif
                    
                </div>
            </div>
        </div>
    </body>
</html>
