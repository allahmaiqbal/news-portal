@extends('category::layouts.master')

@section('title', 'Tag')

@section('content')
    <!-- container menu -->
    <div class="container print-none">
        <ul class="nav nav-tabs mt-2">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('tag.index') }}">All Records</a>
            </li>

            <li class="nav-item">
                <a class="nav-link active" href="#">Edit</a>
            </li>
        </ul>
    </div>
    <!-- container menu end -->

    <div class="container">
        <div class="card mb-5 border-0">
            <div class="card-header p-0 border-0 d-flex">
                <!-- page title -->
                <div class="mt-3">
                    <h4 class="main-title">Edit new tag</h4>
                </div>

                <!-- header icon -->
                <x-icons.back-icon route="{{ route('tag.index') }}" />
            </div>
        </div>

        <div class="card-body p-0 pt-3">
            <form action="{{ route('tag.update', $tag->id) }}" method="post">
                @csrf
                @method('put')
                <div class="row mb-3">
                    <div class="col-2">
                        <x-forms.label for="name" required>
                            Name
                        </x-forms.label>
                    </div>
                    <div class="col-6">
                        <x-forms.input type="text" value="{{ $tag->name }}" name="name" required
                            placeholder="Enter Name" />
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-2">
                        <label class="form-label mt-1">&nbsp;</label>
                    </div>

                    <div class="col-10">
                        <x-buttons.update />
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
