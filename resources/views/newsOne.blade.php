@extends('layouts.main')

@section('title')
    @parent Новость
@endsection

@section ('menu')
    @include('menu')
@endsection

@section('content')
    <a href="{{route('news.category.index')}}">В категории |</a>
    <a href="{{route('news.index')}}">Ко всем новостям </a>
    @if (!$news['isPrivate'])
        <h2>{{ $news['title'] }}</h2>
        <p>{{ $news['text'] }}</p>
    @else
        Новость приватная, зарегистрируйтесь для просмотра.
    @endif
@endsection
