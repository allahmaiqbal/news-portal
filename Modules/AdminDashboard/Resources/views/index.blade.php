@extends('admindashboard::layouts.master')

@section('title', 'AdminDashboard')

@section('content')
 <div class="container align-center" >
    <a class="navbar-brand" href="{{ route('dashboard') }}" >
        <img src="{{ asset('images/logo.png') }}" class="" alt="..." height="100px" width="100px">
    </a>
    <h1>Welcome to rondhonu tv dashboard</h1>
 </div>
    {{-- <h1>Hello World</h1> --}}

    {{-- <p>
        This view is loaded from module: {!! config('admindashboard.name') !!}
    </p> --}}
@endsection
