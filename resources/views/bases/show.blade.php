@extends('layouts.main')
@section('content')
<section class="listings">
    <div class="wrapper">
        <h2 style="text-align: center">{{ $base->title }}</h2>
        <div class="full-description">
            {!! $base->description !!}
        </div>
    </div>
</section>
@endsection