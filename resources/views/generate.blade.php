<!-- resources/views/generate.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Генерация ссылки</h1>
    <form action="{{ route('links.generate') }}" method="POST">
        @csrf
        <label>
            <input type="text" name="url" placeholder="Введите URL" required>
        </label>
        <button type="submit">Генерировать</button>
    </form>
@endsection
