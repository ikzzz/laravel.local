@extends('layouts.main')

@section('title', 'Добавить ресурса новостей')


@section ('menu')
    @include('Admin.menu')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form enctype="multipart/form-data" method="POST" action="@if (!$resource->id){{ route('admin.resourceCreate') }}@else{{ route('admin.resourceUpdate', $resource) }}@endif">
                            @csrf

                            <div class="form-group">
                                <label for="newsTitle">Адрес ресурса новостей</label>
                                @if ($errors->has('resource'))
                                    <div class="alert alert-danger" role="alert">
                                        @foreach($errors->get('resource') as $error)
                                            {{ $error }}
                                        @endforeach
                                    </div>
                                @endif
                                <input name="resource" type="text" class="form-control" id="resource" value="{{ $resource->resource ?? old('resource') }}">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="form-control">
                                    @if ($resource->id) Изменить @else Добавить @endif
                                </button>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

