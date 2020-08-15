@extends('layouts.main')

    @section('title')
        @parent Новости
        @endsection

        @section ('menu')
        @include('menu')
        @endsection

        @section('content')
    Все новости | <a href="{{route('news.category.index')}}">Новости по категориям</a><br>

@forelse($news as $item)
    <h2>{{ $item['title'] }}</h2>
    @if (!$item['isPrivate'])
        <a href="{{ route('news.show', $item['id']) }}">Подробнее...</a><br>
    @endif
    <hr>
@empty
    Нет новостей
@endforelse
@endsection
