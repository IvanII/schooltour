@extends('layouts.main')
@section('content')
<section class="listings">
    <div class="wrapper">
        <ul class="properties_list">
            @foreach($family as $familyItem)
            <li>
                <a href="{{ route('family_show', ['id' => $familyItem->id]) }}">
                    <img src="{{ asset('images/uploads/tours/' . $familyItem->id . '/' . $familyItem->image) }}" alt="" title="" class="property_img"/>
                </a>
                {{--<span class="price">$2500</span>--}}
                <div class="property_details">
                    <h1>
                        <a href="{{ route('family_show', ['id' => $familyItem->id]) }}">{{ $familyItem->title }}</a>
                    </h1>
                </div>
            </li>
            @endforeach
        </ul>
        {{$family->links()}}
    </div>
</section>
@endsection