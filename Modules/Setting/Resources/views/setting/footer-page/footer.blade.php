@extends('setting::layouts.master')

@section('title', 'Setting')

@section('content')
<div class="container print-none">
    <ul class="nav nav-tabs mt-2">
        <li class="nav-item">
            <a class="nav-link">Footer pages information</a>
        </li>
    </ul>
</div>
<!-- container menu end -->

<div class="container">
    <div class="card mb-5 border-0">
        <div class="card-header p-0 border-0 d-flex">
            <!-- page title -->
            <div class="mt-3">
                <h4 class="main-title">Create imformation</h4>
            </div>
        </div>
    </div>

    <div class="card-body p-0 pt-3">
        <form action="{{ route('footer.store')}}" method="post">
            @csrf
            <div class="row mb-3">
                <div class="col-2">
                    <x-forms.label for="about-us" required>
                       About us
                    </x-forms.label>
                </div>

                <div class="col-10">
                    <textarea id="about-us" name="about_us" class="form-control @error('address') is-invalid @enderror" rows="15" placeholder="Enter address">{{ old('about_us', $about_us) }}</textarea>
                    @error('about_us')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-2">
                    <x-forms.label for="about-us" required>
                       Term condition
                    </x-forms.label>
                </div>

                <div class="col-10">
                    <textarea id="term" name="term" class="form-control @error('term') is-invalid @enderror" rows="15" placeholder="Enter terms">{{ old('term', $term) }}</textarea>
                    @error('term')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-2">
                    <label class="form-label mt-1">&nbsp;</label>
                </div>

                <div class="col-10">
                    <x-buttons.save />
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
