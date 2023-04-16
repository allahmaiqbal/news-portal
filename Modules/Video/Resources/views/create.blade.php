@extends('video::layouts.master')

@section('title', 'video')

@section('content')
    <!-- container menu -->
    <div class="container print-none">
        <ul class="nav nav-tabs mt-2">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('video.index') }}">All Records</a>
            </li>

            <li class="nav-item">
                <a class="nav-link active" href="{{ route('video.create') }}">New Entry</a>
            </li>
        </ul>
    </div>
    <!-- container menu end -->

    <div class="container">
        <div class="card mb-5 border-0">
            <div class="card-header p-0 border-0 d-flex">
                <!-- page title -->
                <div class="mt-3">
                    <h4 class="main-title">Create new video path</h4>
                </div>

                <!-- header icon -->
                <x-icons.back-icon route="{{ route('video.index') }}" />
            </div>
        </div>

        <div class="card-body p-0 pt-3">
            <form action="{{ route('video.store') }}" method="post">
                @csrf

                <div class="row mb-3">
                    <div class="col-2">
                        <x-forms.label for="name" required>
                            Video category
                        </x-forms.label>
                    </div>

                    <div class="col-6">
                        <x-forms.input type="text" name="category" required placeholder="Enter Name" />
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-2">
                        <x-forms.label for="name" required>
                            Video title
                        </x-forms.label>
                    </div>

                    <div class="col-6">
                        <x-forms.input type="text" name="title" required placeholder="Enter Name" />
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-2">
                        <x-forms.label for="description">
                            Video link
                        </x-forms.label>
                    </div>

                    <div class="col-8">
                        <x-forms.input type="textarea" cols="1" rows="4" name="link" placeholder="enter description" />
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-2">
                        <label class="form-label mt-1">&nbsp;</label>
                    </div>

                    <div class="col-10">
                        <x-buttons.reset />
                        <x-buttons.save />
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
