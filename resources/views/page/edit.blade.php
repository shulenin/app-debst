@extends('layouts.app')

@section('title', 'Редактировать запись')

@section('content')

    <form action="{{ route('posts.update', $post) }}" method="post" class="m-2">
        @csrf
        @method('PATCH')

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
            <input type="text" class="form-control" id="post-lastname" name="lastname" value="{{ $post->LastName }}">
        </div>
        <div class="mb-3">
            <label for="post-firstname" class="form-label">Имя:</label>
            <input type="text" class="form-control" id="post-firstname" name="firstname" value="{{ $post->FirstName }}">
        </div>
        <div class="mb-3">
            <label for="post-secondname" class="form-label">Отчество:</label>
            <input type="text" class="form-control" id="post-secondname" name="secondname" value="{{ $post->SecondName }}">
        </div>
        <div class="mb-3">
            <label for="post-debt" class="form-label">Размер долга:</label>
            <input type="text" class="form-control" id="post-debt" name="debt" value="{{ $post->Debt }}">
        </div>

        <button type="submit" class="btn btn-primary">Редактировать</button>

        <a href="{{ route('posts.index') }}" class="btn btn-primary">Вернуться</a>

    </form>
@endsection

