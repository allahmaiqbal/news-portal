@extends('category::layouts.master')

@section('title', 'Category')

@section('content')
    <!-- container menu -->
    <div class="container print-none">
        <ul class="nav nav-tabs mt-2">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('category.index') }}">All Records</a>
            </li>

            <li class="nav-item">
                <a class="nav-link active">Edit </a>
            </li>
        </ul>
    </div>
    <!-- container menu end -->

    <div class="container">
        <div class="card mb-5 border-0">
            <div class="card-header p-0 border-0 d-flex">
                <!-- page title -->
                <div class="mt-3">
                    <h4 class="main-title">Edit category</h4>
                </div>
                <!-- header icon -->
                <x-icons.back-icon route="{{ route('category.index') }}" />
            </div>
        </div>

        <div class="card-body p-0 pt-3">
            <form action="{{ route('category.update', $category->id) }}" method="post">
                @csrf
                @method('PUT')
               <div class="row mb-3">
                    <div class="col-2">
                        <x-forms.label for="select" required>
                            Select Page name
                        </x-forms.label>
                    </div>

                    <div class="col-6">
                        <select class="form-select custom" id="select" name="page_id">
                            <option class="text-left" value="" selected disabled>--Select one--
                            </option>
                            @foreach ($pages as $item)
                            <option class="text-left" value="{{ $item->id }}" {{ $category->page_id == $item->id ? 'selected':''   }}>
                                {{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-2">
                        <x-forms.label for="parent_id" required>
                            Category Name
                        </x-forms.label>
                    </div>

                    <div class="col-6">
                     <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" value="{{ old('name', $category->name) }}" placeholder="Enter name">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-2">
                        <x-forms.label for="description">
                            Description
                        </x-forms.label>
                    </div>

                    <div class="col-8">
                        <x-forms.input type="textarea" value="{{ $category->description }}" name="description"
                            placeholder="enter description" />
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
