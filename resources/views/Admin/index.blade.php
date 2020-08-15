@extends('layouts.main')

@section('title')
@parent Главная
@endsection

@section('menu')
@include('Admin/menu')
@endsection

@section('content')
<p> <h1>Welcome to administrator page!!!</h1></p>
@endsection
