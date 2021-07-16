@extends('layouts.export')

@section('title', 'Экспорт Pdf')

@section('content')

    <h2 class="text-center">Очень Важный Официальный Документ</h2>
    <h1 class="text-center">{{$post->LastName}} {{$post->FirstName}} {{$post->SecondName}}</h1>
    <h3 class="text-center">Долг: {{$post->Debt}}</h3>
    <h3 class="text-center">Госпошлина: {{$post->StateFee}}</h3>

@endsection
