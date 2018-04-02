@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Контакты</div>

                    <div class="panel-body">
                        <form method="POST" enctype="multipart/form-data" action="{{action('ContactsController@adminUpdate', ['id' => $contact->id])}}">
                            <input name="_method" type="hidden" value="PUT">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="title">Адрес</label>
                                <input value="{{ $contact->address }}" name="address" type="text" class="form-control" id="title" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="title">Офис</label>
                                <input value="{{ $contact->office }}" name="office" type="text" class="form-control" id="title" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="title">График работы</label>
                                <input value="{{ $contact->working_hours }}" name="working_hours" type="text" class="form-control" id="title" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="title">Телефоны</label>
                                <input value="{{ $contact->phone }}" name="phone" type="text" class="form-control" id="title" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="title">E-mail</label>
                                <input value="{{ $contact->email }}" name="email" type="email" class="form-control" id="title" aria-describedby="emailHelp">
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