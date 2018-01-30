@extends('layouts.main')
@section('content')
<section class="listings">
    <div class="wrapper">
        <ul class="properties_list">
            @foreach($testimonials as $testimonial)
            <div class="testimonial-item">
                <div>
                    {{ $testimonial->description }}
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