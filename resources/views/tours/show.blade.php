@extends('layouts.main')
@section('content')
<section class="listings">
    <div class="wrapper">
        <h2 style="text-align: center">{{ $tour->title }}</h2>

        <div class="full-description">
            {!! $tour->description !!}
        </div>
        <a target="_blank" style="color: blue" href="{{ asset('files/uploads/tours/' . $tour->id . '/' . $tour->file_description) }}">Скачать програму</a>
    </div>
</section>
@endsection