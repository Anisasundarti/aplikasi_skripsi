<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SIG DARATAN</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                background-color: #FFFFFF;
                /*color: #FFFFFF;*/
                border: 100px;
                font-family: 'Nunito', sans-serif;
                font-weight: bold ;
                font-style: italic ;
                max-height: 100vh;
                margin: 0;
                
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

            .title {
                font-size: 40px;
                text-align: center;
            }

            .links > a {
                color: #000000;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body class="background">

        <div class="flex-center full-height position-ref " >
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

         
                <div class="title m-b-md">
                    <img src="{{asset('Lambang_Polri.png')}}"style="width: 200px;height: 200px;"> 
                    <br> SISTEM INFORMASI GEOGRAFIS
                    <br> DAERAH RAWAN KEJAHATAN DI KECAMATAN LOA JANAN ILIR DAN KECAMATAN SAMARINDA SEBERANG 
                    <br>KOTA SAMARINDA 
                </div>

        </div>
    </body>
</html>
