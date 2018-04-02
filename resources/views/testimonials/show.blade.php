@extends('layouts.main')
@section('content')
<section class="listings">
    <div class="wrapper">
        <h3 style="text-align: center">Отзыв от: {{ $testimonial->author }}</h3>

        <div style="width: 480px; float: left">
        </div>
        <div style="float: right" class="full-description">
            <img style="width: 420px; float: left; margin: 7px 15px 7px 0" src="{{ asset('images/uploads/testimonials/' . $testimonial->id . '/' . $testimonial->image) }}" alt="">

            <p style="line-height: 23px;">{!! $testimonial->description !!}</p>
        </div>
        <div style="clear: both;"></div>
    </div>
</section>
@endsection