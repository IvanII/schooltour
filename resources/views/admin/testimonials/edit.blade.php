@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Отзывы</div>

                    <div class="panel-body">
                        <form method="POST" action="{{action('TestimonialsController@adminUpdate', ['id' => $testimonial->id])}}">
                            <input name="_method" type="hidden" value="PUT">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="title">Автор</label>
                                <input value="{{ $testimonial->author }}" name="author" type="text" class="form-control" id="title" aria-describedby="emailHelp">
                                {{--<small id="emailHelp" class="form-text text-muted">Название тура должно быть уникально</small>--}}
                            </div>
                            <div class="form-group">
                                <label for="ckeditortext">Описание</label>
                                <textarea name="description" class="form-control">{{ $testimonial->description }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Сохранить</button>
                        </form>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection