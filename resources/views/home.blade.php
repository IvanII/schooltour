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
                    <a href="{{ route('tours_index') }}">
                        <div class="property_details">
                            <h1 style="text-align: center">
                                Экскурсионные туры<br><br>
                            </h1>
                        </div>
                    </a>
                </li>
                <li style="float: right;">
                    {{--<a href="{{ route('tour_show', ['id' => $tour->id]) }}">--}}
{{--                        <img src="{{ asset('images/uploads/tours/' . $tour->id . '/' . $tour->image) }}" alt="" title="" class="property_img"/>--}}
                    {{--</a>--}}
                    {{--<span class="price">$2500</span>--}}
                    <a href="{{ route('bases_index') }}">
                        <div class="property_details">
                            <h1 style="text-align: center">
                                Базы отдыха и эксурсии по Омску
                            </h1>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </section>
@endsection