@extends('layouts.admin')

@section('content')
    <div class="container">
        <a class="btn btn-primary" href="{{ route('family_create') }}">Добавить</a>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Отдых для детей и родителей</div>

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
                            @foreach ($family as $familyItem)
                                <tr>
                                    <td>{{ mb_substr($familyItem->title, 0, 45) }}</td>
                                    <td>{{ mb_substr(strip_tags($familyItem->description), 0, 45) }}</td>
                                    <td>
                                        <a class="btn btn-primary" href="{{ route('family_edit', ['id' => $familyItem->id]) }}">Редактировать</a>
                                        <form action="{{ route('family_delete', ['id' => $familyItem->id]) }}" method="post">
                                            {!! csrf_field() !!}
                                            <input name="_method" type="hidden" value="delete">
                                            <button class="btn btn-danger" type="submit">Удалить</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $family->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection