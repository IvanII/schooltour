@extends('layouts.main')
@section('content')
<section class="listings">
    <div class="wrapper">
        <ul class="properties_list">
            @foreach($testimonials as $testimonial)
            <div class="testimonial-item">
                <div>
                    {{ str_limit($testimonial->description, 350) }}
                    <a style="color: #0c91e5" href="{{route('testimonial_show', ['id' => $testimonial->id])}}">Читать полностью</a>
                </div>
                <div class="testimonial-item_author">
                    {{ $testimonial->author }}
                </div>
            </div>
            <br>
            <br>
            <hr>
            @endforeach
        </ul>
        {{$testimonials->links()}}
    </div>
</section>
@endsection