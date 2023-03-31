@extends('contactus::layouts.master')

@section('title', 'ContactUS')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('contactus.name') !!}
    </p>
@endsection
