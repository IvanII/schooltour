@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Отзывы</div>

                    <div class="panel-body">
                        <form method="POST" enctype="multipart/form-data" action="{{action('TestimonialsController@adminUpdate', ['id' => $testimonial->id])}}">
                            <input name="_method" type="hidden" value="PUT">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="title">Автор</label>
                                <input value="{{ $testimonial->author }}" name="author" type="text" class="form-control" id="title" aria-describedby="emailHelp">
                                {{--<small id="emailHelp" class="form-text text-muted">Название тура должно быть уникально</small>--}}
                            </div>
                            <div class="form-group">
                                <label>Отзыв</label>
                                <textarea style="height: 400px" name="description" class="form-control">{{ $testimonial->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="title">Фото</label>
                                <input name="image" type="file" class="form-control">
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