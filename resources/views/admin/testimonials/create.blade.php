@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Отзывы</div>

                    <div class="panel-body">
                        <form class="js-submitted-form" enctype="multipart/form-data" method="POST" action="{{action('TestimonialsController@adminAdd')}}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="title">Автор отзыва</label>
                                <input name="author" type="text" class="form-control" id="title" aria-describedby="emailHelp">
                                {{--<small id="emailHelp" class="form-text text-muted">Название должно быть уникально</small>--}}
                            </div>
                            <div class="form-group">
                                <label>Отзыв</label>
                                <textarea style="height: 400px" name="description" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="title">Фото</label>
                                <input name="image" type="file" class="form-control">
                            </div>
                            {{--<div class="form-group">--}}
                                {{--<label for="title">Файл с описанием</label>--}}
                                {{--<input name="file_description" type="file" class="form-control">--}}
                            {{--</div>--}}
                            <button type="submit" class="btn btn-primary js-button-submit">Сохранить</button>
                        </form>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection