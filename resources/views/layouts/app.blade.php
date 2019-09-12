<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'СП ТзОВ "ХІТА"')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900">
    <link rel="stylesheet" href="/fonts/icomoon/style.css">

    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/jquery-ui.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/bootstrap-datepicker.css">


    <link rel="stylesheet" href="/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="/css/aos.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/lightbox.css">
    <link rel="stylesheet" href="/css/cocoen.min.css">

</head>
<body>

<div class="site-wrap">

    <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->


    <div class="site-navbar-wrap">
        <div class="site-navbar-top">
            <div class="container py-3">
                <div class="row align-items-center">
                    <div class="col-6">
                        <a href="#" class="p-2 pl-0"><span class="icon-twitter"></span></a>
                        <a href="https://www.facebook.com/XITA95/" class="p-2 pl-0"><span class="icon-facebook"></span></a>
                        <a href="#" class="p-2 pl-0"><span class="icon-linkedin"></span></a>
                        <a href="#" class="p-2 pl-0"><span class="icon-instagram"></span></a>
                    </div>
                    <div class="col-6">
                        <div class="d-flex ml-auto">
                            <a href="tel:+38 099 095 1697" class="d-flex align-items-center ml-auto mr-4">
                                <span class="icon-phone mr-2"></span>
                                <span class="d-none d-md-inline-block">+38 099 095 1697</span>
                            </a>
                            <a href="mailto:hita@gmail.com" class="d-flex align-items-center">
                                <span class="icon-envelope mr-2"></span>
                                <span class="d-none d-md-inline-block">hita@gmail.com</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-navbar">
            <div class="container py-1">
                <div class="row align-items-center">
                    <div class="col-2">
                        <h1 class="mb-0 site-logo"><a href="index.blade.php"></a></h1>
                    </div>
                    <div class="col-10">
                        <nav class="site-navigation text-right" role="navigation">
                            <div class="container">
                                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#"
                                                                                              class="site-menu-toggle js-menu-toggle text-white"><span
                                            class="icon-menu h3"></span></a></div>

                                <ul class="site-menu js-clone-nav d-none d-lg-block">
                                    <li class="has-children active">
                                        <a href="{{route('home.page')}}">Головна</a>
                                        <ul class="dropdown arrow-top">
                                            <li><a href="#question">Чому ми?</a></li>
                                            <li><a href="#comment">Відгуки клієнтів</a></li>
                                            <li><a href="#albums">Наші пропозиції</a></li>
                                            <li><a href="#news">Новини</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{route('about')}}">Про нас</a></li>
                                    <li class="has-children">
                                        <a href="{{route('home.page')}}#albums">Проекти</a>
                                        <ul class="dropdown arrow-top">
                                            @foreach($albums as $album)
                                                <li>
                                                    <a href="{{route('projects', ['album' => $album->id])}}">{{$album->name}}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li><a href="{{route('blog')}}">Новини</a></li>
                                    <li><a href="{{route('services')}}">Послуги</a></li>
                                    <li><a href="{{route('contact')}}">Контакти</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @yield('content')


    <footer class="site-footer border-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <h3 class="footer-heading mb-4">Навігація</h3>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="{{route('home.page')}}">Головна</a></li>
                                <li><a href="{{route('services')}}">Послуги</a></li>
                                <li><a href="{{route('blog')}}">Новини</a></li>
                                <li><a href="{{route('about')}}">Команда</a></li>
                            </ul>
                        </div>
                    </div>


                </div>
                <div class="col-lg-4">


                    <div class="mb-5">
                        <h3 class="footer-heading mb-4">Останні новини</h3>
                        <div class="block-25">
                            <ul class="list-unstyled">
                                @foreach($blogs as $blog)
                                    <li class="mb-3">
                                        <a href="{{route('blogShow', ['blog' => $blog->id])}}" class="d-flex">
                                            <figure class="image mr-4">
                                                <img src="storage/images/{{$blog->image}}" alt="" class="img-fluid">
                                            </figure>
                                            <div class="text">
                                                <span
                                                    class="small text-uppercase date">{{date('M j, Y H:i', strtotime($blog->created_at))}}</span>
                                                <h3 class="heading font-weight-light">{{$blog->title}}</h3>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                </div>


                <div class="col-lg-4 mb-5 mb-lg-0">

                    <div class="mb-5">
                        <h3 class="footer-heading mb-2">Підписатися на розсилку</h3>
                        <p>Останні новини завжди у твоїй пошті.</p>

                        <form action="#" method="post">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control border-white text-white bg-transparent"
                                       placeholder="Введіть вашу пошту" aria-label="Enter Email"
                                       aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button" id="button-addon2">Підписатися
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="footer-heading mb-4">Знайди нас тут</h3>

                            <div>
                                <a href="https://www.facebook.com/XITA95/" class="pl-0 pr-3"><span
                                        class="icon-facebook"></span></a>
                                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
            <div class="row pt-5 mt-5 text-center">
                <div class="col-md-12">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                        All rights reserved | This template is made with <i class="icon-heart-o" aria-hidden="true"></i>
                        by <a href="https://colorlib.com" target="_blank">Colorlib</a> by Roman Zhyliak
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>

            </div>
        </div>
    </footer>
</div>

<script src="/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="/js/jquery-migrate-3.0.1.min.js"></script>
<script src="/js/jquery-ui.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.stellar.min.js"></script>
<script src="/js/jquery.countdown.min.js"></script>
<script src="/js/jquery.magnific-popup.min.js"></script>
<script src="/js/bootstrap-datepicker.min.js"></script>
<script src="/js/aos.js"></script>
<script src="/js/main.js"></script>
<script src="/js/cocoen-jquery.min.js"></script>
<script src="/js/cocoen.min.js"></script>

</body>
</html>
