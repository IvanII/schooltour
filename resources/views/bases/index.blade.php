@extends('layouts.main')
@section('content')
<section class="listings">
    <div class="wrapper">
        <ul class="properties_list">
            @foreach($bases as $base)
            <li>
                <a href="{{ route('base_show', ['id' => $base->id]) }}">
                    {{--<img src="{{ asset('images/uploads/tours/' . $base->id . '/' . $base->image) }}" alt="" title="" class="property_img"/>--}}
                </a>
                {{--<span class="price">$2500</span>--}}
                <div class="property_details">
                    <h1>
                        <a href="{{ route('base_show', ['id' => $base->id]) }}">{{ $base->title }}</a>
                    </h1>
                </div>
            </li>
            @endforeach
            {{--<li>--}}
                {{--<a href="#">--}}
                    {{--<img src="img/property_2.jpg" alt="" title="" class="property_img"/>--}}
                {{--</a>--}}
                {{--<span class="price">$1000</span>--}}
                {{--<div class="property_details">--}}
                    {{--<h1>--}}
                        {{--<a href="#">Fuisque dictum tortor at purus libero</a>--}}
                    {{--</h1>--}}
                    {{--<h2>2 kitchens, 2 bed, 2 bath... <span class="property_size">(288ftsq)</span></h2>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="#">--}}
                    {{--<img src="img/property_3.jpg" alt="" title="" class="property_img"/>--}}
                {{--</a>--}}
                {{--<span class="price">$500</span>--}}
                {{--<div class="property_details">--}}
                    {{--<h1>--}}
                        {{--<a href="#">Fuisque dictum tortor at purus libero</a>--}}
                    {{--</h1>--}}
                    {{--<h2>2 kitchens, 2 bed, 2 bath... <span class="property_size">(288ftsq)</span></h2>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="#">--}}
                    {{--<img src="img/property_1.jpg" alt="" title="" class="property_img"/>--}}
                {{--</a>--}}
                {{--<span class="price">$2500</span>--}}
                {{--<div class="property_details">--}}
                    {{--<h1>--}}
                        {{--<a href="#">Fuisque dictum tortor at purus libero</a>--}}
                    {{--</h1>--}}
                    {{--<h2>2 kitchens, 2 bed, 2 bath... <span class="property_size">(288ftsq)</span></h2>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="#">--}}
                    {{--<img src="img/property_2.jpg" alt="" title="" class="property_img"/>--}}
                {{--</a>--}}
                {{--<span class="price">$1000</span>--}}
                {{--<div class="property_details">--}}
                    {{--<h1>--}}
                        {{--<a href="#">Fuisque dictum tortor at purus libero</a>--}}
                    {{--</h1>--}}
                    {{--<h2>2 kitchens, 2 bed, 2 bath... <span class="property_size">(288ftsq)</span></h2>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="#">--}}
                    {{--<img src="img/property_3.jpg" alt="" title="" class="property_img"/>--}}
                {{--</a>--}}
                {{--<span class="price">$500</span>--}}
                {{--<div class="property_details">--}}
                    {{--<h1>--}}
                        {{--<a href="#">Fuisque dictum tortor at purus libero</a>--}}
                    {{--</h1>--}}
                    {{--<h2>2 kitchens, 2 bed, 2 bath... <span class="property_size">(288ftsq)</span></h2>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="#">--}}
                    {{--<img src="img/property_1.jpg" alt="" title="" class="property_img"/>--}}
                {{--</a>--}}
                {{--<span class="price">$2500</span>--}}
                {{--<div class="property_details">--}}
                    {{--<h1>--}}
                        {{--<a href="#">Fuisque dictum tortor at purus libero</a>--}}
                    {{--</h1>--}}
                    {{--<h2>2 kitchens, 2 bed, 2 bath... <span class="property_size">(288ftsq)</span></h2>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="#">--}}
                    {{--<img src="img/property_2.jpg" alt="" title="" class="property_img"/>--}}
                {{--</a>--}}
                {{--<span class="price">$1000</span>--}}
                {{--<div class="property_details">--}}
                    {{--<h1>--}}
                        {{--<a href="#">Fuisque dictum tortor at purus libero</a>--}}
                    {{--</h1>--}}
                    {{--<h2>2 kitchens, 2 bed, 2 bath... <span class="property_size">(288ftsq)</span></h2>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="#">--}}
                    {{--<img src="img/property_3.jpg" alt="" title="" class="property_img"/>--}}
                {{--</a>--}}
                {{--<span class="price">$500</span>--}}
                {{--<div class="property_details">--}}
                    {{--<h1>--}}
                        {{--<a href="#">Fuisque dictum tortor at purus libero</a>--}}
                    {{--</h1>--}}
                    {{--<h2>2 kitchens, 2 bed, 2 bath... <span class="property_size">(288ftsq)</span></h2>--}}
                {{--</div>--}}
            {{--</li>--}}
        </ul>
    </div>
</section>
@endsection