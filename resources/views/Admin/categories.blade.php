@extends('layouts.main')

@section('title')
    @parent Новости
@endsection

@section ('menu')
    @include('admin.menu')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h1>CRUD Категорий новостей</h1>
                        <a href="{{route('admin.catCreate')}}"><h2>Добавить категорию новостей </h2></a>
                        @forelse($categories as $item)
                            <h4>Название : {{ $item->name_category }}</h4>
                            <h4>Псевдоним: {{ $item->slug_category }}</h4>
                            <a href="{{ route('admin.catEdit', $item) }}" class="btn btn-success">
                                Edit
                            </a>
                            <a href="{{ route('admin.catDestroy', $item) }}" class="btn btn-danger">
                                Delete
                            </a>

                        @empty
                            Нет категорий
                        @endforelse
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

