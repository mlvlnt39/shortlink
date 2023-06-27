@extends('layouts.shortlink')
@section('content')

    <div class="container mt-4">
        <h2>Создание ссылки</h2>
        <form action="{{ route('links.generate') }}" method="POST">
            <div class="form-group">
                <label for="originalLink">Оригинальная ссылка</label>
                <input type="text" class="form-control" id="originalLink" placeholder="Введите URL">
            </div>
            <button type="submit" class="btn btn-primary">Создать ссылку</button>
        </form>
    </div>
@endsection
