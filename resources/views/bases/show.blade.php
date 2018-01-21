@extends('layouts.main')
@section('content')
<section class="listings">
    <div class="wrapper">
        <h2>{{ $tour->title }}</h2>
        <div class="full-description">
            {!! $tour->description !!}
        </div>
    </div>
</section>
@endsection