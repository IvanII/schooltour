@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Туры</div>

                    <div class="panel-body">
                        <form method="POST" action="{{action('ToursController@adminAdd')}}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="title">Название</label>
                                <input name="title" type="text" class="form-control" id="title" aria-describedby="emailHelp">
                                <small id="emailHelp" class="form-text text-muted">Название тура должно быть уникально</small>
                            </div>
                            <div class="form-group">
                                <label for="ckeditortext">Описание</label>
                                <textarea name="description" class="form-control" id="ckeditortext"></textarea>
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