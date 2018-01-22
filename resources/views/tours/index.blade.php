@extends('layouts.main')
@section('content')
<section class="listings">
    <div class="wrapper">
        <ul class="properties_list">
            @foreach($tours as $tour)
            <li>
                <a href="{{ route('tour_show', ['id' => $tour->id]) }}">
                    <img src="{{ asset('images/uploads/tours/' . $tour->id . '/' . $tour->image) }}" alt="" title="" class="property_img"/>
                </a>
                {{--<span class="price">$2500</span>--}}
                <div class="property_details">
                    <h1>
                        <a href="{{ route('tour_show', ['id' => $tour->id]) }}">{{ $tour->title }}</a>
                    </h1>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</section>
@endsection