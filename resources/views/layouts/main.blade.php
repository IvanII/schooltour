<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Школьные туры</title>
    <meta charset="utf-8">
    <meta name="description" content="Экскурсионные туры для школьников и их родителей. Летний отдых в России и других странах"/>
    <meta name="keywords" content="Туры для школьников, экскурсии, отдых для школьников, экскурсионные туры,туризм, путешествия, купить путевку, отдохнуть семьей, семейный отдых, школьные группы,познавательные экскурсии, туризм для школьников"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    <meta name="yandex-verification" content="1fd61164ce0de709" />
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
                    <li><a href="{{ route('bases_index') }}">Базы отдыха</a></li>
                    <li><a href="{{ route('contacts') }}">Контакты</a></li>
                    {{--<li><a href="#">Sell</a></li>--}}
                    {{--<li><a href="#">About</a></li>--}}
                    {{--<li><a href="#">Contact</a></li>--}}
                </ul>
            </nav>
        </div>
    </header><!--  end header section  -->
    @yield('content')
</section><!--  end hero section  -->
<footer class="site-footer">
    <div class="wrapper footer">
        <ul>
            <li class="links">
                <ul>
                    <li><a href="#">Эксурсионные туры</a></li>
                    <li><a href="#">Базы отдыха и эксурсии по Омску</a></li>
                    <li><a href="#">Отдых для детей и взрослых</a></li>
                    <li><a href="#">Отзывы</a></li>
                    <li><a href="#">Контакты</a></li>
                </ul>
            </li>


            <li class="about">
                <p>
                    644029, г. Омск, ул. 20 Партсъезда, 37 к1, <br>
                    Офис: 28  <br>
                    Телефон: 8-913-633-25-57, 8-913-601-11-62, 51-80-99  <br>
                </p>

            </li>
        </ul>
    </div>
</footer>
<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
</body>
</html>

{{--<section class="search">--}}
    {{--<div class="wrapper">--}}
        {{--<form action="#" method="post">--}}
            {{--<input type="text" id="search" name="search" placeholder="What are you looking for?"  autocomplete="off"/>--}}
            {{--<input type="submit" id="submit_search" name="submit_search"/>--}}
        {{--</form>--}}
        {{--<a href="#" class="advanced_search_icon" id="advanced_search_btn"></a>--}}
    {{--</div>--}}

    {{--<div class="advanced_search">--}}
        {{--<div class="wrapper">--}}
            {{--<span class="arrow"></span>--}}
            {{--<form action="#" method="post">--}}
                {{--<div class="search_fields">--}}
                    {{--<input type="text" class="float" id="check_in_date" name="check_in_date" placeholder="Check In Date"  autocomplete="off">--}}

                    {{--<hr class="field_sep float"/>--}}

                    {{--<input type="text" class="float" id="check_out_date" name="check_out_date" placeholder="Check Out Date"  autocomplete="off">--}}
                {{--</div>--}}
                {{--<div class="search_fields">--}}
                    {{--<input type="text" class="float" id="min_price" name="min_price" placeholder="Min. Price"  autocomplete="off">--}}

                    {{--<hr class="field_sep float"/>--}}

                    {{--<input type="text" class="float" id="max_price" name="max_price" placeholder="Max. price"  autocomplete="off">--}}
                {{--</div>--}}
                {{--<input type="text" id="keywords" name="keywords" placeholder="Keywords"  autocomplete="off">--}}
                {{--<input type="submit" id="submit_search" name="submit_search"/>--}}
            {{--</form>--}}
        {{--</div>--}}
    {{--</div><!--  end advanced search section  -->--}}
{{--</section><!--  end search section  -->--}}