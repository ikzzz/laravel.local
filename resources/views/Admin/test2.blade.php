@extends('layouts.main')

@section('title')
    @parent test 2
@endsection

@section('menu')
    @include('admin.menu')
@endsection

@section('content')
    <p> <h1>test 2</h1></p>
@endsection
