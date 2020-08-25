@extends('layouts.main')

@section('title', 'Добавить категорию новостей')


@section ('menu')
    @include('Admin.menu')
@endsection

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">

                        <form enctype="multipart/form-data" method="POST" action="@if (!$category->id){{ route('admin.catCreate') }}@else{{ route('admin.catUpdate', $category) }}@endif">
    @csrf

                            <div class="form-group">
                                <label for="newsTitle">Название категории</label>
                                <input name="name_category" type="text" class="form-control" id="newsTitle" value="{{ $category->name_category ?? old('name_category') }}">
                            </div>
                            <div class="form-group">
                                <label for="newsTitle">Псевдоним категории(транслитом)</label>
                                <input name="slug_category" type="text" class="form-control" id="newsTitle" value="{{ $category->slug_category ?? old('slug_category') }}">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="form-control">
@if ($category->id) Изменить @else Добавить @endif
                                </button>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
