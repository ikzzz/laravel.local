@extends('layouts.main')

@section('title', 'Добавить новость')


@section ('menu')
    @include('admin.menu')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">

                        <form enctype="multipart/form-data" method="POST" action="@if (!$news->id){{ route('admin.create') }}@else{{ route('admin.update', $news) }}@endif">
                            @csrf
                            {{--@if($news->id) @method('PUT') @endif--}}
                            <div class="form-group">
                                <label for="newsTitle">Название новости</label>
                                @if ($errors->has('title'))
                                    <div class="alert alert-danger" role="alert">
                                        @foreach($errors->get('title') as $error)
                                            {{ $error }}
                                        @endforeach
                                    </div>
                                @endif
                                <input name="title" type="text" class="form-control" id="newsTitle" value="{{ $news->title ?? old('title') }}">
                            </div>


                            <div class="form-group">
                                <label for="newsCategory">Категория новости</label>
                                @if ($errors->has('id_category'))
                                    <div class="alert alert-danger" role="alert">
                                        @foreach ($errors->get('id_category') as $error)
                                            {{ $error }}
                                        @endforeach
                                    </div>
                                @endif
                                <select name="id_category" class="form-control" id="newsCategory">
                                    @forelse($categories as $item)
                                        <option
                                            @if ($item->id == old('id_category') ?? $item->id == $news->id_category) selected
                                            @endif value="{{ $item['id'] }}">{{ $item['name_category'] }}</option>
                                    @empty
                                        <h2>Нет категории</h2>
                                    @endforelse
                                    {{--<option value="break">не верная категория</option>--}}
                                </select>

                            </div>

                            <div class="form-group">
                                <label for="newsText">Текст новости</label>
                                @if ($errors->has('text'))
                                    <div class="alert alert-danger" role="alert">
                                        @foreach ($errors->get('text') as $error)
                                            {{ $error }}
                                        @endforeach
                                    </div>
                                @endif
                                <textarea name="text" class="form-control" rows="5" id="newsText">{!! old('text') ?? $news->text !!}</textarea>
                            </div>

                            <div class="form-group">
                                @if ($errors->has('image'))
                                    <div class="alert alert-danger" role="alert">
                                        @foreach ($errors->get('image') as $error)
                                            {{ $error }}
                                        @endforeach
                                    </div>
                                @endif
                                    <img src="{{ $news->image ?? asset('storage/news_default.jpg') }}" alt="" width="600">
                                    <hr>
                                <input type="file" name="image">
                            </div>

                            <div class="form-check">
                                @if ($errors->has('is_Private'))
                                    <div class="alert alert-danger" role="alert">
                                        @foreach ($errors->get('is_Private') as $error)
                                            {{ $error }}
                                        @endforeach
                                    </div>
                                @endif

                            <div class="form-check">
                                <input @if ($news->isPrivate == 1 || old('isPrivate') == 1) checked @endif name="isPrivate" class="form-check-input" type="checkbox" value="1"
                                       id="newsPrivate">
                                <label class="form-check-label" for="newsPrivate">
                                    Новость private?
                                </label>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="form-control">
                                    @if ($news->id) Изменить @else Добавить @endif
                                </button>

                            </div>
                        </form>
                        <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
                        <script>
                            var options = {
                                filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                                filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                                filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                                filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
                            };
                        </script>
                        <script>
                            CKEDITOR.replace('newsText', options);
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
