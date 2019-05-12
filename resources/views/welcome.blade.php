<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
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

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #fff;
                padding: 0 25px;
                font-size: 16px;
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
    <body style="background-image:url({{asset('website/img/welcome.jpg')}}); background-repeat:no-repeat; background-size: cover;" >
        {{-- <img src="{{asset('website/img/welcome.jpg')}}" alt="Avatar" class="image"> --}}
        <div class="flex-center position-ref full-height col-sm-12 c0l-md-12 col-lg-12">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}" class="btn btn-info btn-block" style="color:#fff;width: 150px;height: 30px;
                        text-align: center;margin-top: 10px;line-height: 30px;font-size: 16px;">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-info" style="color:#fff;width: 150px; height: 30px;
                        text-align: center;margin-top: 10px;line-height: 30px;font-size: 16px;">Login</a>
                        {{-- <a href="{{ route('login') }}">Login</a> --}}

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-info" style="color:#fff;width: 150px;height: 30px;
                            text-align: center;margin-top: 10px;line-height: 30px;font-size: 16px;">Register</a>
                            {{-- <a href="{{ route('register') }}">Register</a> --}}
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content col-sm-12 col-md-12 col-lg-12">
                <div class="title  col-sm-12 col-md-12 col-lg-12 " style="text-align:center;margin-left: -150px; margin-top: -95px;">
                        <p style="margin-top:15px; text-align:center;margin-left: 300px;"><span style="font-family: cursive;font-size:65px;
                            font-weight: bold;color: #14f305;text-decoration: underline;">ONLINE</span> <span style="color: #00f3ff; font-size:65px;font-weight: bold;">Aducation</span></p>
                            
                </div>
                <div class="links  col-sm-12 col-md-12 col-lg-12">
                        <a class="link active" href="{{ url('home') }}">Home</a>
                        <a class="link" href="{{url('about')}}">About Us</a>
                        <a class="link" href="{{url('courses')}}">Course</a>
                        <a class="link" href="#">Gallery</a>
                        <a class="link" href="{{url('contact')}}">Contact</a>
                </div>

            </div>
        </div>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
