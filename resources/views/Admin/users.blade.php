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
                        <h1>CRUD пользователей</h1>
                        {{--<h4><a href="route('admin.users.create')">Добавить пользователя </a></h4>--}}

                        @forelse($users as $user)
                            <h4>{{ $user->name }}</h4>
                            <h4>{{ $user->email}}</h4>
                            {{--<a href="route('admin.updateProfile', $user)" class="btn btn-success">
                                Edit
                            </a>--}}
                            @if(Auth::user()->id == $user->id && $user->is_admin == true)
                            @else
                            <a href="{{route('admin.UserDestroy', $user)}}" class="btn btn-danger">
                                Удалить
                            </a>
                            @endif
                            @if(Auth::user()->id == $user->id && $user->is_admin == true)
                                <a href="#" class="btn btn-success">Вы администратор!</a>
                            @else
                                @if($user->is_admin == true)
                                <a href="{{route('admin.unsetAdmin', $user)}}" class="btn btn-danger">
                                    Убрать из администраторов
                                </a>
                                @else
                                    <a href="{{route('admin.setAdmin', $user)}}" class="btn btn-success">
                                        Добавить в администраторы
                                    </a>@endif
                            @endif



                        @empty
                            Нет юзеров
                        @endforelse
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

