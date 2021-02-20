{{--
<a href="{{ route('Home') }}">Главная |</a>
<a href="{{ route('About')}}">О проекте |</a>
<a href="{{ route('news.index')}}">Новости |</a>
<a href="{{ route('admin.news')}}">Админка |</a>
--}}
<li class="nav-item {{ request()->routeIs('Home')?'active':'' }}">
    <a class="nav-link" href="{{ route('Home') }}">Главная</a>
</li>
<li class="nav-item {{ request()->routeIs('About')?'active':'' }}">
    <a class="nav-link" href="{{ route('About') }}">О проекте</a>
</li>
<li class="nav-item {{ request()->routeIs('news.index')?'active':'' }}">
    <a class="nav-link" href="{{ route('news.index') }}">Новости</a>
</li>
<li class="nav-item {{ request()->routeIs('admin.news')?'active':'' }}">
    <a class="nav-link" href="{{ route('admin.news') }}">Админка</a>
</li>

