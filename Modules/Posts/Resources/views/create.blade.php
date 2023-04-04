@extends('page::layouts.master')

@section('title', 'Post')
@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
@endpush

@section('content')
    <!-- container menu -->
    <div class="container print-none">
        <ul class="nav nav-tabs mt-2">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('posts.index') }}">All Records</a>
            </li>

            <li class="nav-item">
                <a class="nav-link active" href="#">New Entry</a>
            </li>
        </ul>
    </div>
    <!-- container menu end -->

    <div class="container">
        <div class="card mb-5 border-0">
            <div class="card-header p-0 border-0 d-flex">
                <!-- page title -->
                <div class="mt-3">
                    <h4 class="main-title">Create new posts</h4>
                    <p class="fw-bold"><small>All <span style="color: red">*</span> Mark must be required</small></p>
                </div>

                <!-- header icon -->
                <x-icons.back-icon route="{{ route('posts.index') }}" />
            </div>
        </div>

        <div class="card-body p-0 pt-2">
            <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mb-2">
                    <div class="col-8">
                        <div class="row">
                            <div class="col-12">
                                <x-forms.label for="post-title" required>
                                    PostTitle
                                </x-forms.label>
                                <x-forms.input type="text" value="{{ old('title') }}" id="post-title" name="title"
                                    required placeholder="Enter Name" />
                            </div>

                            {{-- <div id="vueRoot">
                                <category-subcategory :categories="{{ json_encode($categories) }}" />
                            </div> --}}

                            <div class="col-12">
                                <x-forms.label for="task-textarea" required>
                                    Post Content
                                </x-forms.label>
                                <x-forms.input type="textarea" id='task-textarea' value="{!! old('content') !!}"
                                    name="content" placeholder="Enter content" />
                            </div>
                        </div>
                    </div>

                    <div class="col-4 mt-0">
                        <div class="row">
                            <div class="">
                                <div class="">
                                    <div class="col-12">
                                        <x-forms.label for="breakin-news">
                                           Breaking News
                                        </x-forms.label>
                                        <div class="col-6">
                                            <div class="d-flex">
                                                <div class="form-check">
                                                    <input type="radio" name="breaking_news" value="1" class="form-check-input" id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">Yes</label>
                                                </div>
                                                <div class="form-check ms-3">
                                                    <input type="radio" name="breaking_news" value="0" class="form-check-input" id="flexRadioDefault2"
                                                        checked>
                                                    <label class="form-check-label" for="flexRadioDefault2"> No</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- <div class="col-6">
                                        <div class="d-flex">
                                            <div class="form-check">
                                                <input type="radio" name="flexRadioDefault" class="form-check-input" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1"> Default radio</label>
                                            </div>
                                            <div class="form-check ms-3">
                                                <input type="radio" name="flexRadioDefault" class="form-check-input" id="flexRadioDefault2"
                                                    checked>
                                                <label class="form-check-label" for="flexRadioDefault2"> Default checked radio</label>
                                            </div>
                                        </div>
                                    </div> --}}

                                    <div class="col-12">
                                        <x-forms.label for="category_id" required>
                                            Select Category
                                        </x-forms.label>
                                        <select class="form-select" id="category_id" name="category_id" required>
                                            <option  disabled selected>Chose one</option>
                                            @foreach ($categories as $category)
                                               <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-12">
                                        <x-forms.label for="image-title">
                                            Image Title
                                        </x-forms.label>
                                        <x-forms.input type="text" id="image-title" value="{{ old('image_title') }}"
                                            name="image_title" placeholder="Enter title" />
                                    </div>

                                    <div class="col-12">
                                        <x-forms.label for="image" required>
                                            image
                                        </x-forms.label>
                                        <x-forms.input type="file" id="image" name="image"
                                            placeholder="Enter title"  required/>
                                        <div class="form-group">
                                            <img id="image-preview" src=""
                                                alt=""style="max-width: 100px; max-height: 90px;" required>
                                        </div>
                                    </div>

                                    {{-- <div class="col-12">
                                        <x-forms.label for="thumbnail">
                                            Thumbnail
                                        </x-forms.label>
                                        <x-forms.input type="file" id="thumbnail" name="thumbnail"
                                            placeholder="Enter title" />
                                        <div class="form-group">
                                            <img id="thumbnail-preview" src="" alt=""
                                                style="max-width: 100px; max-height: 90px;">
                                        </div>
                                    </div> --}}

                                    <div class="col-12">
                                        <x-forms.label for="tags" required>
                                            Slelect Tag
                                        </x-forms.label><br />
                                        <input name="tags" id="tags" class="form-control tags tagify-input"
                                            placeholder="write some tags" value="" list="related-model-list" >
                                        <datalist id="related-tags-list">
                                            @foreach ($tags as $tag)
                                                <option value="{{ $tag->name }}">
                                            @endforeach
                                        </datalist>
                                    </div>

                                    {{-- <div class="col-12">
                                        <x-forms.label for="description">
                                            Short Description
                                        </x-forms.label><br />
                                        <x-forms.input type="textarea" id='description' rows="2" cols="80"
                                            value="{{ old('short_description') }}" name="short_description"
                                            placeholder="Enter short description" />
                                    </div> --}}

                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <x-forms.label for="can-comment">
                                                    Can Comment
                                                </x-forms.label>
                                                <select class="form-select" id="can-comment" name="can_comment">
                                                    <option value="1">Yes</option>
                                                    <option value="0">No</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <x-forms.label for="is-published">
                                                    Published
                                                </x-forms.label>
                                                <select class="form-select  @error('is_published') is-invalid @enderror "
                                                    id="is-published " name="is_published">
                                                    <option value="1">Yes</option>
                                                    <option value="0">No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <x-forms.label for="reporter_id">
                                            Reporter Select
                                        </x-forms.label>
                                        <select class="form-select" id="reporter_id" name="reporter_id">
                                            <option selected disabled>Choose One</option>
                                            @foreach ($reporters as $reporter)
                                                <option value="{{ $reporter->id }}">{{ $reporter->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

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
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>

    <script src="{{ asset('ckeditor5/ckeditor.js') }}"></script>
    <script>
        // Get the file input fields and image preview tags
        const image1Input = document.getElementById("image");
        const image1Preview = document.getElementById("image-preview");
        const image2Input = document.getElementById("thumbnail");
        const image2Preview = document.getElementById("thumbnail-preview");

        // Add change event listeners to the file input fields
        image1Input.addEventListener("change", function() {
            const file = this.files[0];
            const reader = new FileReader();

            reader.onload = function() {
                image1Preview.setAttribute("src", reader.result);
            }

            reader.readAsDataURL(file);
        });

        image2Input.addEventListener("change", function() {
            const file = this.files[0];
            const reader = new FileReader();

            reader.onload = function() {
                image2Preview.setAttribute("src", reader.result);
            }

            reader.readAsDataURL(file);
        })
    </script>
    <script>
        // Get the input element
        var input = document.querySelector('.tagify-input');
        // Initialize Tagify
        var tagify = new Tagify(input, {
            whitelist: [], // We'll populate this with the list of related tags
            dropdown: {
                enabled: 0 // Disable Tagify's built-in dropdown
            }
        });

        // Populate the whitelist with the list of related tags
        var relatedTags = document.querySelectorAll('#related-tags-list option');
        var tagList = [];
        relatedTags.forEach(function(tag) {
            tagList.push(tag.value);
        });
        tagify.settings.whitelist = tagList;
    </script>

    <script>
        ClassicEditor
            .create(document.querySelector('#task-textarea'), {
                height: '400px' // Set the height to 400px
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
