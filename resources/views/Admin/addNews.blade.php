@extends('layouts.main')

@section('title', 'Добавление новости')


@section ('menu')
    @include('admin.menu')
@endsection

@section('content')

                        <form method="POST" action="{{ route('admin.addNews') }}">
                            @csrf
                                <label for="newsTitle">Заголовок</label>
                                <input name="title" type="text" id="newsTitle" value=" "><br>
                                <label for="newsCategory">Категория новости</label>
                                <select name="category"  id="newsCategory">
                                    @forelse($categories as $item)
                                        <option  value="{{ $item['id'] }}">{{ $item['category'] }}</option>
                                    @empty
                                        <h2>Нет категории</h2>
                                    @endforelse

                                </select>
                            <br>
                                <label for="newsText">Текст новости</label>
                                <textarea name="text" class="form-control" rows="5" id="newsText"> </textarea>
                                <input type="checkbox" checked name="isPrivate" id="newsPrivate"> Приватная новость
                                </label>
                            <br>
                                <input type="submit"  value="Добавить новость"
                                       id="addNews">

                        </form>
@endsection
