@extends('layouts.admin')

@section('content')
    <div class="container">
        <a class="btn btn-primary" href="{{ route('tour_create') }}">Добавить</a>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Туры</div>

                    <div class="panel-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Название</th>
                                <th>Описание</th>
                                <th>Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($tours as $tour)
                                <tr>
                                    <td>{{ mb_substr($tour->title, 0, 45) }}</td>
                                    <td>{{ mb_substr(strip_tags($tour->description), 0, 45) }}</td>
                                    <td>
                                        <a class="btn btn-primary" href="{{ route('tour_edit', ['id' => $tour->id]) }}">Редактировать</a>
                                        <form action="{{ route('tour_delete', ['id' => $tour->id]) }}" method="post">
                                            {!! csrf_field() !!}
                                            <input name="_method" type="hidden" value="delete">
                                            <button class="btn btn-danger" type="submit">Удалить</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $tours->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection