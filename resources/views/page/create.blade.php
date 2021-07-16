@extends('layouts.app')

@section('title', 'Создать запись')

@section('content')

    <form action="{{ route('posts.store') }}" method="post" class="m-2">
        @csrf

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br/>
        @endif

        <div class="mb-3">
            <label for="post-lastname" class="form-label">Фамилия:</label>
            <input type="text" class="form-control" id="post-lastname" name="lastname" value="{{ old('lastname') }}">
        </div>
        <div class="mb-3">
            <label for="post-firstname" class="form-label">Имя:</label>
            <input type="text" class="form-control" id="post-firstname" name="firstname" value="{{ old('firstname') }}">
        </div>
        <div class="mb-3">
            <label for="post-secondname" class="form-label">Отчество:</label>
            <input type="text" class="form-control" id="post-secondname" name="secondname" value="{{ old('secondname') }}">
        </div>
        <div class="mb-3">
            <label for="post-debt" class="form-label">Размер долга:</label>
            <input type="text" class="form-control" id="post-debt" name="debt" value="{{ old('debt') }}">
        </div>

        <button type="submit" class="btn btn-primary">Добавить</button>

        <a href="{{ route('posts.index') }}" class="btn btn-primary">Вернуться</a>

    </form>

@endsection
