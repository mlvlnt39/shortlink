<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Список ссылок</h1>
    <ul>
        @foreach ($links as $link)
            <li>
                <a href="{{ route('redirect', $link->short_code) }}">{{ $link->short_code }}</a>
                <a href="{{ route('redirect', $link->short_code) }}">{{ $link->original_url }}</a>
                <span>({{ $link->clicks }} переходов)</span>
            </li>
        @endforeach
    </ul>
@endsection
