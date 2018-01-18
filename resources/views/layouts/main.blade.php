<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Еазвание</title>
    <meta charset="utf-8">
    <meta name="description" content="Туры для школьников"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">


</head>
<body>

<section class="">
    <header>
        <div class="wrapper">
            <a href="#"><img src="img/logo.png" class="logo" alt="" titl=""/></a>
            <a href="#" class="hamburger"></a>
            <nav>
                <ul>
                    <li><a href="#">Туры по России</a></li>
                    <li><a href="#">Базы отдыха</a></li>
                    {{--<li><a href="#">Sell</a></li>--}}
                    {{--<li><a href="#">About</a></li>--}}
                    {{--<li><a href="#">Contact</a></li>--}}
                </ul>
            </nav>
        </div>
    </header><!--  end header section  -->

</section><!--  end hero section  -->
@yield('content')
<footer>
    <div class="wrapper footer">
        {{--<ul>--}}
            {{--<li class="links">--}}
                {{--<ul>--}}
                    {{--<li><a href="#">About</a></li>--}}
                    {{--<li><a href="#">Support</a></li>--}}
                    {{--<li><a href="#">Terms</a></li>--}}
                    {{--<li><a href="#">Policy</a></li>--}}
                    {{--<li><a href="#">Contact</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}

            {{--<li class="links">--}}
                {{--<ul>--}}
                    {{--<li><a href="#">Appartements</a></li>--}}
                    {{--<li><a href="#">Houses</a></li>--}}
                    {{--<li><a href="#">Villas</a></li>--}}
                    {{--<li><a href="#">Mansions</a></li>--}}
                    {{--<li><a href="#">...</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}

            {{--<li class="links">--}}
                {{--<ul>--}}
                    {{--<li><a href="#">New York</a></li>--}}
                    {{--<li><a href="#">Los Anglos</a></li>--}}
                    {{--<li><a href="#">Miami</a></li>--}}
                    {{--<li><a href="#">Washington</a></li>--}}
                    {{--<li><a href="#">...</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
        {{--</ul>--}}
    </div>

    {{--<div class="copyrights wrapper">--}}
        {{--Copyright © 2015 <a href="http://pixelhint.com" target="_blank" class="ph_link" title="Download more free Templates">Pixelhint.com</a>. All Rights Reserved.--}}
    {{--</div>--}}
</footer><!--  end footer  -->
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