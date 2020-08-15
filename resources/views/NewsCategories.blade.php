@extends('layouts.main')

@section('title')
    @parent Категории
@endsection

@section ('menu')
    @include('menu')
@endsection

@section('content')
<a href="{{route('news.index')}}">Все новости|</a> Новости по категориям<br>
@forelse($categories as $category)
    <a href="{{ route('news.category.show', $category['name']) }}">
        <h2>{{ $category['category'] }}</h2>
    </a>
@empty
    Нет категорий
@endforelse
@endsection
