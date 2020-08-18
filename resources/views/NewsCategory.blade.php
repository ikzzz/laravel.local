@extends('layouts.main')

    @section('title')
        @parent Новость по категории
    @endsection

    @section ('menu')
        @include('menu')
    @endsection

    @section('content')
        <a href="{{route('news.index')}}">Все новости |</a>
        <a href="{{route('news.category.index')}}">Новости по категориям</a><br>
        @forelse($news as $item)
            <h2>{{ $item['title'] }}</h2>
            @if (!$item['isPrivate'])
                <a href="<?= route('news.show', $item['id']) ?>">Подробнее...</a><br>
            @endif
            <hr>
        @empty
            Нет новостей
        @endforelse
    @endsection
