<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Школьные туры</title>
    <meta charset="utf-8">
    <meta name="description" content="Экскурсионные туры для школьников и их родителей. Летний отдых в России и других странах"/>
    <meta name="keywords" content="Туры для школьников, экскурсии, отдых для школьников, экскурсионные туры,туризм, путешествия, купить путевку, отдохнуть семьей, семейный отдых, школьные группы,познавательные экскурсии, туризм для школьников, школьные туры омск, туризм омск, омские туристические компании, туры для школьников омск, туристическая компания школьные туры"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    <meta name="yandex-verification" content="1fd61164ce0de709" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/images/favicon.ico') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">


</head>
<body>

<section class="page-wrap">
    <header>
        <div class="wrapper">
            <a href="/"><img src="{{asset('images/logotip2.png')}}" class="logo" alt="" titl=""/></a>
            <a href="/" class="hamburger">Мир путешествий <span style="margin-left: 22px;">Мир познаний</span></a>
            <nav>
                <ul>
                    <li><a href="{{ route('tours_index') }}">Экскурсионные туры</a></li>
                    <li><a href="{{ route('bases_index') }}">Базы отдыха и эксурсии по Омску</a></li>
                    <li><a href="{{ route('contacts') }}">Контакты</a></li>
                </ul>
            </nav>
        </div>
    </header>
    @yield('content')
</section>
<footer class="site-footer">
    <div class="wrapper footer">
        <ul>
            <li class="links">
                <ul>
                    <li><a href="{{ route('tours_index') }}">Эксурсионные туры</a></li>
                    <li><a href="{{ route('bases_index') }}">Базы отдыха и эксурсии по Омску</a></li>
                    <li><a href="{{ route('family_index') }}">Отдых для детей и взрослых</a></li>
                    <li><a href="{{ route('testimonials_index') }}">Отзывы</a></li>
                    <li><a href="{{ route('contacts') }}">Контакты</a></li>
                </ul>
            </li>


            <li class="about">
                <p>
                    {{ $contactsLayout->address }} <br>
                    Офис: {{ $contactsLayout->office }}  <br>
                    Телефон: {{ $contactsLayout->phone }}  <br>
                </p>

            </li>
        </ul>
    </div>
</footer>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-113169442-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-113169442-1');
</script>

<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
</body>
</html>