@extends('layouts.main')

@section('title')
    @parent test 1
@endsection

@section('menu')
    @include('admin.menu')
@endsection

@section('content')
    <p> <h1>test 1</h1></p>
@endsection
