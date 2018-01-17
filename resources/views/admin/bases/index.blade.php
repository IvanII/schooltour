@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
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
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $base->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection