@extends('admindashboard::layouts.master')

@section('title', 'AdminDashboard')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('admindashboard.name') !!}
    </p>
@endsection