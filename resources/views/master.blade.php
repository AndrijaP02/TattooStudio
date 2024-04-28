<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('fontawesome-free-6.4.2-web/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
</head>

<body>
    <div class="container">

        <header style="border-radius: 30px;">
            <!--pocetak hedera-->
            <div class="row">
                <div class="col-md-6">
                    <div class="page-header">
                        <h2><a href="{{route('index')}}"><img src="/img/logo1.png"></a>
                            <small style="font-family: fantasy"> 1UST ONE MORE </small>
                        </h2>
                    </div>
                </div>
                <div class="col-md-4" style="padding-top: 80px;">
                    <h5>
                        <a href="http://facebook.com"> <i class="fa-brands fa-facebook  fa-lg"
                                style="color: #000000; margin-right:5px;"></i></a>
                        <a href="http://instagram.com"> <i class="fa-brands fa-instagram fa-lg"
                                style="color: #000000; margin-right:5px;"></i></a>
                        <a href="http://youtube.com"> <i class="fa-brands fa-youtube fa-lg"
                                style="color: #000000; margin-right:5px;"></i></a>
                        <a href="http://twitter.com"> <i class="fa-brands fa-twitter fa-lg"
                                style="color: #000000; margin-right:5px;"></i></a>
                    </h5>
                </div>

                <div class="col-md-2" style="padding-top: 80px">
                    @if (Route::has('login'))
                    <div>
                        @auth
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class="font-semibold text-black-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                            style="color: #000000; margin-left:10px; font-family: fantasy;  text-decoration:none;">Logout</a>
                        <a href="{{ route('user.profil') }}"
                            style="color: #000000; margin-left:10px; font-family: fantasy; text-decoration:none;">Profile
                            @if(auth()->user()->unread_consultations > 0)
                            <span class="badge" style="color: #000000">{{ auth()->user()->unread_consultations }}</span>
                            @endif
                            @if(auth()->user()->unreadNotifications()->count() > 0)
                            <span class="badge" style="color: #000000">{{ auth()->user()->unreadNotifications()->count()
                                }}</span>
                            @endif</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        @else
                        <a href="{{ route('login') }}"
                            class="font-semibold text-black-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                            style="color: #000000; font-family: fantasy;  text-decoration:none;">Login</a>
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            style="color: #000000; margin-left:10px; font-family: fantasy; text-decoration:none;"
                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                        @endauth
                    </div>
                    @endif
                </div>
            </div>
        </header>
        <!--kraj hedera-->
        <nav class="navbar navbar-expand-lg" style="background-color: rgb(109, 110, 110); border-radius: 30px;"
            style="padding: 0px 10px;">
            <div class="container d-flex align-items-center justify-content-between">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 container d-flex align-items-center justify-content-between"
                    style="font-size:17px">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('index')}}"><span>Početna</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('onama')}}"><span>O
                                nama</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page"
                            href="{{route('artist.index')}}"><span>Artists</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('posts.index')}}"><span>Blog</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page"
                            href="{{route('konsultacije.create')}}"><span>Booking</span></a>
                    </li>
                </ul>
            </div>
        </nav>

        @yield('content')

        <footer id="footer" class="footer">

            <div class="container">
                <div class="row gy-3">
                    <div class="col-lg-3 col-md-6 d-flex">
                        <div>
                            <h4>Adresa</h4>
                            <p>
                                Takovska 47 <br>
                                11108 Beograd - Srbija<br>
                            </p>
                        </div>

                    </div>

                    <div class="col-lg-3 col-md-6 footer-links d-flex">
                        <div>
                            <h4>Kontaktirajte nas</h4>
                            <p>
                                <strong>Telefon:</strong> +381 64 585 8787<br>
                                <strong>Email:</strong> info@1ustone.com<br>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links d-flex">
                        <div>
                            <h4>Radno vreme</h4>
                            <p>
                                <strong>Pon-Sub: 10h - 23h </strong><br>
                                Nedelja: Zatvoreno
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Pratite nas</h4>
                        <div class="social-links d-flex">
                            <a href="http://facebook.com"> <i class="fa-brands fa-facebook  fa-lg"
                                    style="color: white;"></i></a>
                            <a href="http://instagram.com"> <i class="fa-brands fa-instagram fa-lg"
                                    style="color: white; "></i></a>
                            <a href="http://youtube.com"> <i class="fa-brands fa-youtube fa-lg"
                                    style="color: white; "></i></a>
                            <a href="http://twitter.com"> <i class="fa-brands fa-twitter fa-lg"
                                    style="color: white;"></i></a>
                        </div>
                    </div>

                </div>
            </div>

            <div class=" container">
                <div class="copyright">
                    &copy; Copyright <strong><span>Petković Andrija</span></strong> ITS 2023
                </div>
            </div>

        </footer>
    </div>
    <script>
        setTimeout(function(){
            $(".alert").slideUp(500, function(){
                $(this).remove();
            });
        }, 5000); // 5000ms (5 sekundi)
    </script>
    <style>
        .alert {
            border-radius: 30px;
            margin-bottom: -0px;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>