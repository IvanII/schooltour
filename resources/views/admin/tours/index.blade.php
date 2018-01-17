@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
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
                                    <td>{{ $tour->title }}</td>
                                    <td>{{ strip_tags($tour->description) }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $tour->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection