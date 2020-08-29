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
                        <h1>CRUD Новости</h1>
                        <h4><a href="{{route('admin.news.create')}}">Добавить новость </a></h4>
                        @forelse($news as $item)
                            <h2>{{ $item->title }}</h2>
                            <a href="{{ route('admin.news.edit', $item) }}" class="btn btn-success">
                                Edit
                            </a>
                            <a href="{{ route('admin.news.destroy', $item) }}" class="btn btn-danger">
                                Delete
                            </a>

                        @empty
                            Нет новостей
                        @endforelse
                        {{ $news->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
