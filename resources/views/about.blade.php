@extends('layouts.main')

@section('title')
    @parent Об этом
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
    <h1>О нашем проекте!</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
