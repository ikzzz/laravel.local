@extends('layouts.main')

@section('title')
@parent Главная
@endsection

@section('menu')
@include('Admin/menu')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
<p> <h1>Welcome to administrator page!!!</h1></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
