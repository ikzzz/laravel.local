@extends('layouts.main')

@section('title')
    @parent Админка
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
                        <h1>CRUD Новостных ресурсов</h1>
                        <a href="{{route('admin.resourceCreate')}}"><h2>Добавить ресурс новостей </h2></a>
                        @forelse($resource as $item)
                            <h4>Адрес новостного ресурса : {{ $item->resource }}</h4>
                            <a href="{{ route('admin.resourceEdit', $item) }}" class="btn btn-success">
                                Edit
                            </a>
                            <a href="{{ route('admin.resourceDestroy', $item) }}" class="btn btn-danger">
                                Delete
                            </a>
                        @empty
                            Нет ресурсов
                        @endforelse
                        {{ $resource->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


