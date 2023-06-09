@extends('page::layouts.master')

@section('title', 'post')
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
            <a class="nav-link active">Edit</a>
        </li>
    </ul>
</div>
<!-- container menu end -->

<div class="container">
    <div class="card mb-5 border-0">
        <div class="card-header p-0 border-0 d-flex">
            <!-- page title -->
            <div class="mt-3">
                <h4 class="main-title">Edit posts</h4>
            </div>

            <!-- header icon -->
            <x-icons.back-icon route="{{ route('posts.index') }}" />
        </div>
    </div>

    <div class="card-body p-0 pt-2">
        <form action="{{ route('posts.update',$post->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="row mb-3">
                <div class="col-8">
                    <div class="row">
                        <div class="col-12">
                            <x-forms.label for="post-title" >
                                PostTitle
                            </x-forms.label>
                            <x-forms.input type="text" value="{{ old('title',$post->title) }}" id="post-title" name="title" required
                                placeholder="Enter Name" />
                        </div>

                        {{-- <div id="vueRoot">
                            <category-subcategory
                             :categories="{{ json_encode($categories) }}"
                             :post="{{ json_encode($post) }}"

                              />
                        </div> --}}

                        <div class="col-12">
                            <x-forms.label for="task-textarea">
                                Post Content
                            </x-forms.label>
                            <x-forms.input type="textarea" id='task-textarea' value="{!! old('content',$post->content) !!}"
                                name="content" placeholder="Enter content" required/>
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
                                                <input type="radio" name="breaking_news" value="1" class="form-check-input" id="flexRadioDefault1"
                                                 @checked($post->breaking_news == 1) >
                                                <label class="form-check-label" for="flexRadioDefault1">Yes</label>
                                            </div>
                                            <div class="form-check ms-3">
                                                <input type="radio" name="breaking_news" value="0" class="form-check-input" id="flexRadioDefault2"
                                                @checked($post->breaking_news == 0)>
                                                <label class="form-check-label" for="flexRadioDefault2"> No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <x-forms.label for="category_id">
                                        Select Category
                                    </x-forms.label>
                                    <select class="form-select" id="category_id" name="category_id" required>
                                        <option  disabled selected>Chose one</option>
                                        @foreach ($categories as $category)
                                           <option value="{{$category->id}}" {{$category->id == $post->category_id ? 'selected':'' }}>{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-12">
                                    <x-forms.label for="image-title">
                                        Image Title
                                    </x-forms.label>
                                    <x-forms.input type="text" id="image-title" value="{{ old('image_title',$post->image_title) }}"
                                        name="image_title" placeholder="Enter title" />
                                </div>

                                <div class="col-12">
                                    <x-forms.label for="image">
                                        image
                                    </x-forms.label>
                                    <x-forms.input type="file" id="image" name="image" placeholder="Enter title" />
                                    <div class="form-group">
                                        <img class="img-thumbnail"
                                            src="{{ $post->getFirstMediaUrl(\Modules\Posts\Entities\Post::MEDIA_COLLECTION_AVATAR) }}" alt=""
                                            width="90px">
                                    </div>
                                </div>

                                {{-- <div class="col-12">
                                    <x-forms.label for="thumbnail">
                                        Thumbnail
                                    </x-forms.label>
                                    <x-forms.input type="file" id="thumbnail" name="thumbnail"
                                        placeholder="Enter title" />
                                    <div class="form-group">
                                       <img class="img-thumbnail" src="{{ $post->getFirstMediaUrl(\Modules\Posts\Entities\Post::MEDIA_CONVERSION_AVATAR_THUMBNAIL) }}"
                                            alt="" width="90px">
                                    </div>
                                </div> --}}

                                <div class="col-12">
                                    <x-forms.label>
                                        Slelect Tag
                                    </x-forms.label><br />
                                    <input name="tags" class="tagify-input" placeholder="write some tags"
                                        value="@foreach ($post->tags as $tag){{ $tag->name }}@if (!$loop->last),@endif @endforeach"
                                        list="related-model-list">
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
                                        value="{{ old('short_description',$post->short_description) }}" name="short_description"
                                        placeholder="Enter short description" />
                                </div> --}}

                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <x-forms.label for="can-comment">
                                                Can Comment
                                            </x-forms.label>
                                            <select class="form-select" id="can-comment" name="can_comment">
                                                <option value="1" @selected($post->can_comment == 1)>Yes</option>
                                                <option value="0" @selected($post->can_comment == 0)>No</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                           <x-forms.label for="is-published">
                                                Published
                                            </x-forms.label>
                                            <select class="form-select" id="is-published" name="is_published">
                                                <option value="1" @selected($post->isPublished())>Yes</option>
                                                <option value="0" @selected(!$post->isPublished())>No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <x-forms.label for="reporter_id">
                                        Reporter Select
                                    </x-forms.label>
                                    <select class="form-select  id=" reporter_id" name="reporter_id">
                                        <option selected disabled>Choose One</option>
                                        @foreach ($reporters as $reporter )
                                        <option value="{{ $reporter->id }}" {{ $post->reporter_id == $reporter->id ?'selected':'' }}>{{ $reporter->name }}</option>
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
                    <x-buttons.update />
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
