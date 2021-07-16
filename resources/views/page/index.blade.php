@extends('layouts.app')

@section('title', 'Главная')

@section('content')
    <div class="d-flex justify-content-between">
        <a href="{{ route('posts.create') }}" class="btn btn-primary m-3">Создать запись</a>
        <a href="{{ route('export.excel') }}" class="btn btn-primary m-3">Экспорт Excel</a>
    </div>

    @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    <table class="table table-striped m-3">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">ФИО</th>
            <th scope="col">Долг</th>
            <th scope="col">Гос.пошлина</th>
            <th scope="col">PDF</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>

        @foreach($posts as $post)
            <tr>
                <th scope="row">{{$post->id}}</th>
                <td>
                    <a href="{{ route('export.stream-pdf', $post) }}" target="_blank">{{$post->LastName}} {{$post->FirstName}} {{$post->SecondName}}</a>
                </td>
                <td>{{$post->Debt}} ₽</td>
                <td>{{$post->StateFee}} ₽</td>
                <td>
                    <a href="{{ route('export.pdf', $post) }}" class="link-primary m-3"><i class="fa fa-file-pdf-o"
                                                                                              aria-hidden="true"></i></a>
                </td>
                <td>
                    <a href="{{ route('posts.edit', $post) }}" class="link-primary"> <i class="fa fa-pencil"
                                                                                        aria-hidden="true"></i></a>

                    <form action="{{ route('posts.destroy', $post) }}" method="post" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-link p-0"><i class="fa fa-trash"
                                                                          aria-hidden="true"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach


        </tbody>
    </table>


@endsection
