<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Xinergi Education</title>

        <!-- Fonts -->
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
                color: #636b6f;
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

            .dropbtn {
              background-color: #4CAF50;
              color: white;
              padding: 16px;
              font-size: 16px;
              border: none;
              cursor: pointer;
            }

            .dropdown {
              position: relative;
              display: inline-block;
            }

            .dropdown-content {
              display: none;
              position: absolute;
              background-color: #f9f9f9;
              min-width: 160px;
              box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
              z-index: 1;
            }

            .dropdown-content a {
              color: black;
              padding: 12px 16px;
              text-decoration: none;
              display: block;
            }

            .dropdown-content a:hover {background-color: #f1f1f1}

            .dropdown:hover .dropdown-content {
              display: block;
            }

            .dropdown:hover .dropbtn {
              background-color: #3e8e41;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            {{-- @if (Route::has('login'))
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
            @endif --}}

            <div class="content">
                <div class="title m-b-md">
                    <img src="{{asset('logo/logo.png')}}" alt="" width="60px" height="60px"> Xinergi Education
                </div>

                {{-- <div class="links">
                    <a href="https://laravel.com/docs">Playgroup</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div> --}}
                <div class="dropdown">
                  <button class="dropbtn">Playgroup</button>
                  <div class="dropdown-content">
                  <a href="#">Daftar</a>
                  <a href="#">Masuk</a>
                  <a href="#">Tes Online</a>
                  </div>
                </div>
                <div class="dropdown">
                  <button class="dropbtn">TK-A</button>
                  <div class="dropdown-content">
                    <a href="#">Daftar</a>
                    <a href="#">Masuk</a>
                    <a href="#">Tes Online</a>
                  </div>
                </div>
                <div class="dropdown">
                  <button class="dropbtn">TK-B</button>
                  <div class="dropdown-content">
                    <a href="#">Daftar</a>
                    <a href="#">Masuk</a>
                    <a href="#">Tes Online</a>
                  </div>
                </div>
                <div class="dropdown">
                  <button class="dropbtn">SD</button>
                  <div class="dropdown-content">
                    <a href="#">Daftar</a>
                    <a href="#">Masuk</a>
                    <a href="#">Tes Online</a>
                  </div>
                </div>
                <div class="dropdown">
                  <button class="dropbtn">SMP</button>
                  <div class="dropdown-content">
                    <a href="#">Daftar</a>
                    <a href="#">Masuk</a>
                    <a href="#">Tes Online</a>
                  </div>
                </div>
                <div class="dropdown">
                  <button class="dropbtn">SMA/SMK</button>
                  <div class="dropdown-content">
                    <a href="#">Daftar</a>
                    <a href="#">Masuk</a>
                    <a href="#">Tes Online</a>
                  </div>
                </div>
                <div class="dropdown">
                  <button class="dropbtn">Mahasiswa</button>
                  <div class="dropdown-content">
                    <a href="#">Daftar</a>
                    <a href="#">Masuk</a>
                    <a href="#">Tes Online</a>
                  </div>
                </div>
                <div class="dropdown">
                  <button class="dropbtn">Karyawan</button>
                  <div class="dropdown-content">
                    <a href="#">Daftar</a>
                    <a href="#">Masuk</a>
                    <a href="#">Tes Online</a>
                  </div>
                </div>
            </div>
        </div>
    </body>
</html>
