@extends('layouts.admin')

@section('content')
    <div class="container">
        <a class="btn btn-primary" href="{{ route('testimonials_create') }}">Добавить</a>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Отзывы</div>

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
                            @foreach ($testimonials as $testimonial)
                                <tr>
                                    <td>{{ mb_substr($testimonial->author, 0, 45) }}</td>
                                    <td>{{ mb_substr(strip_tags($testimonial->description), 0, 45) }}</td>
                                    <td>
                                        <a class="btn btn-primary" href="{{ route('testimonials_edit', ['id' => $testimonial->id]) }}">Редактировать</a>
                                        <form action="{{ route('testimonials_delete', ['id' => $testimonial->id]) }}" method="post">
                                            {!! csrf_field() !!}
                                            <input name="_method" type="hidden" value="delete">
                                            <button class="btn btn-danger" type="submit">Удалить</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $testimonials->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection