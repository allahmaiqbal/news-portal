@extends('setting::layouts.master')

@section('title', 'Setting')

@section('content')
<div class="container print-none">
    <ul class="nav nav-tabs mt-2">
        <li class="nav-item">
            <a class="nav-link">All basic information</a>
        </li>
    </ul>
</div>
<!-- container menu end -->

<div class="container">
    <div class="card mb-5 border-0">
        <div class="card-header p-0 border-0 d-flex">
            <!-- page title -->
            <div class="mt-3">
                <h4 class="main-title">Create new basic information</h4>
            </div>
        </div>
    </div>

    <div class="card-body p-0 pt-3">
        <form action="{{ route('basic-info.store')}}" method="post">
            @csrf
            <div class="row mb-3">
                <div class="col-2">
                    <x-forms.label for="chief_editor" required>
                        Chief editor
                    </x-forms.label>
                </div>

                <div class="col-6">
                    <input type="text" class="form-control @error('chief_editor') is-invalid @enderror"
                    id="chief_editor"
                    name="chief_editor" value="{{ old('chief_editor',$chief_editor) }}"
                    placeholder="Enter chief editor">
                    @error('chief_editor')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-2">
                    <x-forms.label for="site-name" required>
                        Managing director
                    </x-forms.label>
                </div>

                <div class="col-6">
                    <input type="text" class="form-control @error('managing_director') is-invalid @enderror"
                    id="managing_director"
                    name="managing_director" value="{{ old('managing_director',$managing_director) }}"
                    placeholder="Enter managing director">
                    @error('managing_director')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-2">
                    <x-forms.label for="site-name" required>
                        Site name
                    </x-forms.label>
                </div>

                <div class="col-6">
                    <input type="text" class="form-control @error('site_name') is-invalid @enderror"
                    id="site-name"
                    name="site_name" value="{{ old('site_name',$site_name) }}"
                    placeholder="Enter site name">
                    @error('site_name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-2">
                    <x-forms.label for="phone" required>
                        Mobile
                    </x-forms.label>
                </div>

                <div class="col-6">
                    <input type="text" class="form-control @error('phone') is-invalid @enderror"
                    id="phone"
                    name="phone" value="{{ old('phone',$phone) }}"
                    placeholder="Enter mobile number">
                    @error('phone')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-2">
                    <x-forms.label for="site-name" required>
                       Email
                    </x-forms.label>
                </div>

                <div class="col-6">
                    <input type="text" class="form-control @error('email') is-invalid @enderror"
                    id="email-name"
                    name="email" value="{{ old('email',$email) }}"
                    placeholder="Enter email">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-2">
                    <x-forms.label for="site-name" required>
                       Address
                    </x-forms.label>
                </div>

                <div class="col-6">
                    <textarea id="address" name="address" class="form-control @error('address') is-invalid @enderror" rows="5" placeholder="Enter address">{{ old('address', $address) }}</textarea>
                    @error('address')
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
