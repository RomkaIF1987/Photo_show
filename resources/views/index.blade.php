<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>СП ТзОВ "ХІТА"</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        body {
            background-image: url("https://scontent.fiev1-1.fna.fbcdn.net/v/t1.0-9/17353473_1130732830388779_4883592352335138838_n.jpg?_nc_cat=105&_nc_ht=scontent.fiev1-1.fna&oh=f602ea1a7d51c5e1c694c59ce63ce08f&oe=5CC756C9");
            background-position: center;
            background-repeat: no-repeat;
            /*opacity: 0.5;*/
        }

        footer {
            padding-top: 15px;
        }

        h3 {
            font-weight: bold;
        }

        .lead {
            font-weight: bold;
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.2/examples/cover/cover.css" rel="stylesheet">
</head>
<body class="text-center">
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    <header class="masthead mb-lg-auto">
        <div class="inner">
            <h3 class="cover-heading" style="align-content: center">ФАБРИКА МЕБЛІВ ТА ДВЕРЕЙ "ХІТА"</h3>
        </div>
    </header>

    <main role="main" class="inner cover">
        <h1 class="cover-heading">Елітні вироби з масиву дерева</h1>
        <p class="lead">Меблі для тих, хто цінує красу і надійність</p>
        <p class="lead">
            @csrf
            <a href="{{route('albums.index')}}" class="btn btn-lg btn-secondary">Дізнатися більше</a>
        </p>
    </main>

    <footer class="mastfoot mt-auto">
        <div class="inner">
            <p>© 2019 Усі права захищено.
                Використання будь-яких матеріалів, розміщених на нашому сайті суворо
                заборонено.</p>
        </div>
    </footer>
</div>
</body>
</html>
