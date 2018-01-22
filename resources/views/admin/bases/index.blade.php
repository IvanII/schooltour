@extends('layouts.admin')

@section('content')
    <div class="container">
        <a class="btn btn-primary" href="{{ route('base_create') }}">Добавить</a>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Базы отдыха</div>

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
                                @foreach ($bases as $base)
                                    <tr>
                                        <td>{{ $base->title }}</td>
                                        <td>{{ strip_tags($base->description) }}</td>
                                        <td>
                                            <a class="btn btn-primary" href="{{ route('base_edit', ['id' => $base->id]) }}">Редактировать</a>
                                            <form action="{{ route('base_delete', ['id' => $base->id]) }}" method="post">
                                                {!! csrf_field() !!}
                                                <input name="_method" type="hidden" value="delete">
                                                <button class="btn btn-danger" type="submit">Удалить</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $bases->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection