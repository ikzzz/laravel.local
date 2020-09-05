<li class="nav-item {{ request()->routeIs('Home')?'active':'' }}">
    <a class="nav-link" href="{{ route('Home') }}">Главная</a>
</li>
<li class="nav-item {{ request()->routeIs('About')?'active':'' }}">
    <a class="nav-link" href="{{ route('About') }}">О проекте</a>
</li>
<li class="nav-item {{ request()->routeIs('news.index')?'active':'' }}">
    <a class="nav-link" href="{{ route('news.index') }}">Новости</a>
</li>

<ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            Админка <span class="caret"></span>
        </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('admin.news') }}">
                    CRUD Новостей
                </a>
                <a class="dropdown-item" href="{{ route('admin.categories') }}">
                    CRUD категории
                </a>
                <a class="dropdown-item" href="{{ route('admin.users') }}">
                    CRUD пользователей
                </a>
                <a class="dropdown-item" href="{{ route('admin.parser') }}">
                    Запарсить новости
                </a>
                <a class="dropdown-item" href="{{ route('admin.test1') }}">
                    Тест 1
                </a>
                <a class="dropdown-item" href="{{ route('admin.test2') }}">
                    Тест 2
                </a>

            </div>
    </li>
</ul>

