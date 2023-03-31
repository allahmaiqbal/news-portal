@extends('category::layouts.master')

@section('title', 'SubCategory')

@section('content')
<!-- container menu -->
<div class="container print-none">
    <ul class="nav nav-tabs mt-2">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('sub-category.index') }}">All Records</a>
        </li>

        <li class="nav-item">
            <a class="nav-link active" >New Entry</a>
        </li>
    </ul>
</div>
<!-- container menu end -->

<div class="container">
    <div class="card mb-5 border-0">
        <div class="card-header p-0 border-0 d-flex">
            <!-- page title -->
            <div class="mt-3">
                <h4 class="main-title">Create new subcategory</h4>
            </div>

            <!-- header icon -->
            <x-icons.back-icon route="{{ route('sub-category.index') }}" />
        </div>
    </div>

    <div class="card-body p-0 pt-3">
        <form action="{{ route('sub-category.store') }}" method="post">
            @csrf
            <div class="row mb-3">
                <div class="col-2">
                    <x-forms.label for="name" required>
                        Select Category
                    </x-forms.label>
                </div>

                <div class="col-6">
                    <select class="form-select custom" id="select" name="category_id">
                        <option class="text-left" value="" selected disabled>--Select one--
                        </option>
                        @foreach ($categories as $item)
                        <option class="text-left" value="{{ $item->id }}">
                            {{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-2">
                    <x-forms.label for="name" required>
                        SubCategory Name
                    </x-forms.label>
                </div>

                <div class="col-6">
                    <x-forms.input type="text" name="name" required placeholder="Enter Name" />
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-2">
                    <x-forms.label for="description">
                        Description
                    </x-forms.label>
                </div>

                <div class="col-8">
                    <x-forms.input type="textarea" name="description" placeholder="enter description" />
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
