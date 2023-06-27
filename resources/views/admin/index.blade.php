@extends('layouts.shortlink')
@section('content')

    <div class="container mt-4">
        <h2>Админка</h2>
        @foreach ($links as $link)
        <table class="table">
            <thead>
            <tr>
                <th>Оригинальная ссылка</th>
                <th>Укороченная ссылка</th>
                <th>Количество переходов</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td> <a href="{{ route('redirect', $link->short_code) }}">{{ $link->original_url }}</a></td>
                <td><a href="{{ route('redirect', $link->short_code) }}">{{ $link->short_code }}</a></td>
                <td>{{ $link->clicks }} переходов</td>
            </tr>
            </tbody>
        </table>
        @endforeach
    </div>
@endsection
