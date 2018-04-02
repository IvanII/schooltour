@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Туры</div>

                    <div class="panel-body">
                        <form method="POST" enctype="multipart/form-data" action="{{action('ToursController@adminUpdate', ['id' => $tour->id])}}">
                            <input name="_method" type="hidden" value="PUT">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="title">Название</label>
                                <input value="{{ $tour->title }}" name="title" type="text" class="form-control" id="title" aria-describedby="emailHelp">
                                <small id="emailHelp" class="form-text text-muted">Название тура должно быть уникально</small>
                            </div>
                            <div class="form-group">
                                <label for="ckeditortext">Описание</label>
                                <textarea name="description" class="form-control" id="ckeditortext">{{ $tour->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="title">Фото</label>
                                <input name="image" type="file" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="title">Файл с описанием</label>
                                <input name="file_description" type="file" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Сохранить</button>
                        </form>
                        <div></div>
                        <img style="width: 420px; float: left; margin: 7px 15px 7px 0" src="{{ asset('images/uploads/tours/' . $tour->id . '/' . $tour->image) }}" alt="">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection