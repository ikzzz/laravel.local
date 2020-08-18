@extends('layouts.main')

@section('title', 'Добавление новости')


@section ('menu')
    @include('admin.menu')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.create') }}">
                            @csrf
                                <label for="newsTitle">Заголовок</label>
                                <input name="title" type="text" id="newsTitle" value="{{ old('title') }}"><br>
                                <label for="newsCategory">Категория новости</label>
                                <select name="category" class="form-control" id="newsCategory">
                                    @forelse($categories as $item)
                                        <option @if ($item['id'] == old('category')) selected @endif value="{{ $item['id'] }}">{{ $item['category'] }}</option>
                                    @empty
                                        <h2>Нет категории</h2>
                                    @endforelse

                                </select>
                            <br>
                                <label for="newsText">Текст новости</label>
                                <textarea name="text" class="form-control" rows="5" id="newsText">{{ old('text') }} </textarea>
                                <div class="form-check">
                                    <input @if (old('isPrivate') == 1) checked @endif name="isPrivate" class="form-check-input" type="checkbox" value="1"
                                         id="newsPrivate">
                                    <label class="form-check-label" for="newsPrivate">
                                        Приватная новость
                                    </label>
                                </div>
                            <br>
                            <div class="form-group">
                                <input type="submit" class="btn btn-outline-primary" value="Добавить новость"
                                       id="addNews">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
