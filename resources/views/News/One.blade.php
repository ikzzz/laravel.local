@extends ("layouts.main")

@section('title')
    @parent Новости
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
                        @if (!$news->isPrivate)
                            <h2><?=$news->title?></h2>
                            <div class="card-img">
                                <img src="{{ $news->image ?? asset('storage/news_default.jpg') }}" alt="" width="600">
                            </div>

                            <p><?=$news->text?></p>
                        @else
                            Новость приватная. Зарегистрируйтесь для просмотра ..
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


