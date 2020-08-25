@extends('layouts.main')

@section('title')
    @parentНовости
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <a href="{{route('news.category.index')}}">К категориям</a><br>
                        <h1>Новости категории ...</h1>

                        @forelse($category as $item)
                            <p>{{ $item->title }}</p>
                            @if (!$item->isPrivate)
                                <a href="{{ route('news.show', $item->id) }}">Подробнее...</a><br>
                            @endif
                            <hr>
                        @empty
                            Нет новостей

                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection