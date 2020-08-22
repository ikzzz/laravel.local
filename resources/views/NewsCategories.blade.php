@extends('layouts.main')

@section('title')
    @parent Категории
@endsection

@section ('menu')
    @include('menu')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
<a href="{{route('news.index')}}">Все новости|</a> Новости по категориям<br>

@forelse($categories as $category)
    <a href="{{ route('news.category.show', $category->id) }}">
        <h2>{{ $category->name_category }}</h2>
    </a>
@empty
    Нет категорий
@endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
