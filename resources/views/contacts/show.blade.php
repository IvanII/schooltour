@extends('layouts.main')
@section('content')
    <section class="listings">
        <div class="wrapper">
            <h2>Туристическая компания 'Школьные туры'</h2>

            {{ $contact->address }}, <br> <br>
            Офис: {{ $contact->office }}  <br> <br>
            Режим работы: {{ $contact->working_hours }} <br> <br>
            Телефон: {{ $contact->phone }}  <br> <br>
            Email: <a style="color: #0c91e5" href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>  <br> <br>
        </div>
        <div style="text-align: center">
            <a class="dg-widget-link" href="http://2gis.ru/omsk/firm/70000001030726549/center/73.27292919158937,55.03310128515129/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Омска</a>
            <div class="dg-widget-link">
                <a href="http://2gis.ru/omsk/center/73.272924,55.032959/zoom/16/routeTab/rsType/bus/to/73.272924,55.032959╎ШКОЛЬНЫЕ ТУРЫ, туристическая компания?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до ШКОЛЬНЫЕ ТУРЫ, туристическая компания
                </a>
            </div>
            <script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script>
            <script charset="utf-8">new DGWidgetLoader({"width":840,"height":400,"borderColor":"#a3a3a3","pos":{"lat":55.03310128515129,"lon":73.27292919158937,"zoom":16},"opt":{"city":"omsk"},"org":[{"id":"70000001030726549"}]});
            </script>
            <noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.
            </noscript>
    </section>
@endsection