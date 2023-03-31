@extends('reporter::layouts.master')

@section('title', 'Reporter')

@section('content')
<!-- container menu -->
<div class="container print-none">
    <ul class="nav nav-tabs mt-2">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('reporters.index') }}">All Records</a>
        </li>

        <li class="nav-item">
            <a class="nav-link active" href="{{ route('reporters.create') }}">New Entry</a>
        </li>
    </ul>
</div>
<!-- container menu end -->

<div class="container">
    <div class="card mb-5 border-0">
        <div class="card-header p-0 border-0 d-flex">
            <!-- page title -->
            <div class="mt-3">
                <h4 class="main-title">Create new Reporter</h4>
            </div>

            <!-- header icon -->
            <x-icons.back-icon route="{{ route('reporters.index') }}" />
        </div>
    </div>

    <div class="card-body p-0 pt-3">
        <form action="{{ route('reporters.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-8">

                    <div class="row mb-3">
                        <div class="col-2">
                            <x-forms.label for="name" required>
                                Reporter Name
                            </x-forms.label>
                        </div>
                        <div class="col-8">
                            <x-forms.input type="text" name="name" value="{{ old('name')}}" placeholder="Enter name" required />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-2">
                            <x-forms.label for="mobile">
                                Mobile
                            </x-forms.label>
                        </div>
                        <div class="col-8">
                            <x-forms.input type="number" value="{{ old('mobile')}}" name="mobile" id="mobile"  placeholder="Enter mobile number" />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-2">
                            <x-forms.label for="email">
                                Email
                            </x-forms.label>
                        </div>
                        <div class="col-8">
                            <x-forms.input type="email" name="email" value="{{ old('email')}}" placeholder="Enter email" />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-2">
                            <x-forms.label for="address">
                                Address
                            </x-forms.label>
                        </div>
                        <div class="col-10">
                            <x-forms.input col="3" row="3" type="textarea" value="{{ old('address')}}" name="address" placeholder="Enter address" />
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="row mb">
                        <div class="col-6">
                            <x-forms.label for="image">
                                Add Photo
                            </x-forms.label>
                            <x-forms.input type="file" name="image"  id="image" />
                            <div class="form-group">
                                <img id="image-preview" class="img-thumbnail" src="" alt="" style="max-width: 120px; max-height: 100px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-2">
                    <label class="form-label mt-1">&nbsp;</label>
                </div>

                <div class="col-12">
                    <x-buttons.reset />
                    <x-buttons.save />
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
@push('scripts')
<script>
   // Listen for the change event on the file input field
    document.getElementById("image").addEventListener("change", function() {
    // Get the selected file
    const file = this.files[0];

    // Create a new FileReader object
    const reader = new FileReader();

    // Set the src attribute of the image preview tag to the data URL of the selected file
    reader.onload = function() {
    const thumbnailPreview = document.getElementById("image-preview");
    thumbnailPreview.setAttribute("src", reader.result);
    }

    reader.readAsDataURL(file);
    });
</script>
@endpush
