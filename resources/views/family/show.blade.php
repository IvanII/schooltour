@extends('layouts.main')
@section('content')
<section class="listings">
    <div class="wrapper">
        <h2 style="text-align: center">{{ $family->title }}</h2>
        <div class="full-description">
            {!! $family->description !!}
        </div>
    </div>
</section>
@endsection