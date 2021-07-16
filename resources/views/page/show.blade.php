@extends('layouts.app')

@section('title', 'Просмотр записи')

@section('content')
    <div class="card m-1 p-3">
        <div class="card-body">
            <h1>
                {{ $post->LastName }} <br/>
                {{ $post->FirstName }}
                {{ $post->SecondName }}
            </h1>
            <h2>
                Долг: {{ $post->Debt }} <br/>
                Гос.пошлина: {{ $post->StateFee }}
            </h2>
        </div>
    </div>

    <a href="{{ route('posts.index') }}" class="btn btn-primary m-3">Вернуться</a>
@endsection

