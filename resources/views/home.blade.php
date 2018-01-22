@extends('layouts.main')
@section('content')
    <section class="listings">
        <div class="wrapper">
            <ul class="properties_list">
                <li>
                    {{--<a href="{{ route('tour_show', ['id' => $tour->id]) }}">--}}
{{--                        <img src="{{ asset('images/uploads/tours/' . $tour->id . '/' . $tour->image) }}" alt="" title="" class="property_img"/>--}}
                    {{--</a>--}}
                    {{--<span class="price">$2500</span>--}}
                    <div class="property_details">
                        <h1 style="text-align: center">
                            <a href="{{ route('tours_index') }}">Туры по России</a>
                        </h1>
                    </div>
                </li>
                <li style="float: right;">
                    {{--<a href="{{ route('tour_show', ['id' => $tour->id]) }}">--}}
{{--                        <img src="{{ asset('images/uploads/tours/' . $tour->id . '/' . $tour->image) }}" alt="" title="" class="property_img"/>--}}
                    {{--</a>--}}
                    {{--<span class="price">$2500</span>--}}
                    <div class="property_details">
                        <h1 style="text-align: center">
                            <a href="{{ route('bases_index') }}">Базы отдыха</a>
                        </h1>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <footer class="footer">
        <div class="wrapper footer">
        </div>
    </footer>
@endsection