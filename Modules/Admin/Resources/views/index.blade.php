@extends('admin::layouts.master')

@section('title', 'Admin')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('admin.name') !!}
    </p>
@endsection
