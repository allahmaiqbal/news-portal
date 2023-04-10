@extends('content::layouts.master')

@section('title', 'Content')

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('content.name') !!}
    </p>
@endsection
