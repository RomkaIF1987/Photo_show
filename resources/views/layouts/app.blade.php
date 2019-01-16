<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>@yield('title', 'СП ТзОВ "ХІТА"')</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.2/examples/album/album.css" rel="stylesheet">
    <link href="{{asset ('css/site.css')}}" rel="stylesheet">
    <link href="{{asset ('css/lightbox.css')}}" rel="stylesheet">
</head>
<body>
<header>
    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                    <h4 class="text-white">Про нас</h4>
                    <p class="text-muted">Наша компанія працює на меблевому ринку більше 2 десятків років. За цей час ми
                        стали одним з лідерів галузі меблевої продукції в Україні, а наша назва Хіта - впізнавана та
                        шанована у всіх куточках країни. Ми робили ексклюзивні меблі для кімнат переговорів, приймалень,
                        кабінетів, спалень та віталень в 50 містах України. Ексклюзивні вироби на замовлення - це наша
                        робота, яку ми робимо добре.</p>
                </div>
                <div class="col-sm-4 offset-md-1 py-4">
                    <h4 class="text-white">Контакти</h4>
                    <ul class="list-unstyled">
                        <li>
                            <a href="https://list.in.ua/%D0%A1%D0%9F-%D0%A2%D0%9E%D0%92/7459/%D0%A5%D1%96%D1%82%D0%B0-%D0%86%D0%B2%D0%B0%D0%BD%D0%BE-%D0%A4%D1%80%D0%B0%D0%BD%D0%BA%D1%96%D0%B2%D1%81%D1%8C%D0%BA"
                               class="text-white">Ми на list.in.ua</a></li>
                        <li><a href="https://hita.0342.ua/" class="text-white">Ми на 0342.ua</a></li>
                        <li><a href="https://www.facebook.com/XITA95/" class="text-white">Ми на Facebook</a></li>
                        <li><a href="{{route('getEmail')}}" class="text-white">Напишіть нам</a></li>
                        @guest
                            <li>
                                <a class="text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                {{--<li class="nav-item">--}}
                                {{--<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
                                {{--</li>--}}
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a href="{{route('home.page')}}" class="navbar-brand">
                <strong>На головну</strong>
            </a>
            <a href="{{route('albums.index')}}" class="navbar-brand">
                <strong>Каталог виробів</strong>
            </a>
            <a href="{{route('contact')}}" class="navbar-brand">
                <strong>Де нас знайти</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader"
                    aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</header>

@yield('content')

<footer class="text-muted">
    <div class="container">
        <p class="float-right">
            <a href="#">Повернутися на початок</a>
        </p>
        <p>© 2017 Усі права захищено.
            Використання будь-яких матеріалів, розміщених на нашому сайті суворо
            заборонено.</p>
    </div>
</footer>
<script type="text/javascript" src="{{asset('js/lightbox-plus-jquery.min.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.2/dist/js/bootstrap.bundle.min.js"><\/script>')</script>
<script src="https://getbootstrap.com/docs/4.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-zDnhMsjVZfS3hiP7oCBRmfjkQC4fzxVxFhBx8Hkz2aZX8gEvA/jsP3eXRCvzTofP"
        crossorigin="anonymous"></script>
</body>
</html>
