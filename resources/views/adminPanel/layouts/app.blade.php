<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>@yield('title', 'Admin Panel СП ТзОВ "ХІТА"')</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" media="screen,projection" type="text/css" href="../../../css/reset.css"/>
    <link rel="stylesheet" media="screen,projection" type="text/css" href="../../../css/main.css"/>
    <link rel="stylesheet" media="screen,projection" type="text/css" href="../../../css/2col.css" title="2col"/>
    <link rel="alternate stylesheet" media="screen,projection" type="text/css" href="../../../css/1col.css"
          title="1col"/>
    <!--[if lte IE 6]>
    <link rel="stylesheet" media="screen,projection" type="text/css" href="../../../css/main-ie6.css"/><![endif]-->
    <link rel="stylesheet" media="screen,projection" type="text/css" href="../../../css/adminstyle.css"/>
    <link rel="stylesheet" media="screen,projection" type="text/css" href="../../../css/mystyle.css"/>
    <script type="text/javascript" src="../../../js/jquery.js"></script>
    <script type="text/javascript" src="../../../js/switcher.js"></script>
    <script type="text/javascript" src="../../../js/toggle.js"></script>
    <script type="text/javascript" src="../../../js/ui.core.js"></script>
    <script type="text/javascript" src="../../../js/ui.tabs.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".tabs > ul").tabs();
        });
    </script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({
            selector: "textarea",  // change this value according to your HTML
            plugins: "media"
        });</script>
</head>
<body>
<div id="main">
    <!-- Tray -->
    <div id="tray" class="box">
        <a href="javascript:void(0)" rel="2col" class="styleswitch ico-col2"
           title="Display two columns"><img src="design/switcher-2col.gif" alt=""/></a>
        <p class="f-right">User: <strong><a href="#">{{Auth::user()->name}}</a></strong>
            <strong><a href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" id="logout">Log
                    out</a></strong></p>
        <form id="logout-form" action="{{ route('logout') }}" method="POST"
              style="display: none;">
            @csrf
        </form>
    </div>
    <!--  /tray -->
    <hr class="noscreen"/>
    <!-- Menu -->
    <div id="menu" class="box">
        <ul class="box f-right">
            <li><a href="{{route('home.page')}}"><span><strong>Visit Site</strong></span></a></li>
        </ul>
        <ul class="box">
            <li id="menu-active"><a href="{{route('admin.homePage')}}"><span>Головна</span></a></li>
            <!-- Active -->
            <li><a href="{{route('albums.create')}}"><span>Додати альбом</span></a></li>
            <li><a href="{{route('photos.create')}}"><span>Додати фотографію</span></a></li>
            <li><a href="{{route('comment.create')}}"><span>Додати відгук</span></a></li>
            <li><a href="{{route('question.create')}}"><span>Додати питання</span></a></li>
            <li><a href="{{route('blog.create')}}"><span>Додати новину</span></a></li>
        </ul>
    </div>

@yield('content')

<!-- Footer -->
    <footer id="footer" class="box">
        <p class="f-left">&copy; 2019 <a href="#">Roman Zhyliak</a>, All Rights Reserved &reg;</p>
        <p class="f-right">Templates by <a href="http://www.adminizio.com/">Adminizio</a></p>
    </footer>
    <!-- /footer -->
</div>
<!-- /main -->
</body>
</html>
