<a href="{{ route('Home') }}">Главная |</a>
<a href="{{ route('About')}}">О проекте |</a>
<a href="{{ route('news.index')}}">Новости |</a>
<a href="{{ route('admin.Admin')}}">Админка |</a>
{{--}}<a href="{{ route('logout')}}">Выйти</a>--}}
<br>
<a href="{{route('admin.create')}}">Добавить новость |</a>
<a href="{{route('admin.test1')}}">Тест 1 |</a>
<a href="{{route('admin.test2')}}">Тест 2 |</a>
<br>
<a href="{{route('admin.downloadImage')}}">Скачать картинку |</a>
<a href="{{route('admin.json')}}">Скачать новости в json |</a>
