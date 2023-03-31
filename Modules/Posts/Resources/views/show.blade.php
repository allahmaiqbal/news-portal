 @extends('posts::layouts.master')

 @section('title', 'Post')

 @section('content')
     <!-- container menu -->
     <div class="container print-none">
         <ul class="nav nav-tabs mt-2">
             <li class="nav-item">
                 <a class="nav-link " href="{{ route('posts.index') }}">All Records</a>
             </li>

             <li class="nav-item">
                 <a class="nav-link active" >Page Details</a>
             </li>
         </ul>
     </div>
     <!-- container menu end -->

     <div class="container">
         <!-- card head -->
         <div class="card border-0">
             <div class="card-header p-0 d-md-flex align-items-center border-0 d-block">
                 <!-- page title -->
                 <div class="mt-3 mb-2">
                     <h4 class="main-title">Details of posts</h4>
                     {{-- <p><small>About {{ count($categories) }} results.</small></p> --}}
                 </div>

                 <!-- Print -->
                 {{-- <a href="#" class="btn top-icon-button print-none ms-auto" title="Print" onclick="window.print()">
                     <i class="bi bi-printer"></i>
                 </a> --}}
                 {{-- <!-- search -->
                 <a href="{{ route('posts.create') }}" class="btn top-icon-button print-none" title="Create new element">
                     <i class="bi bi-pencil"></i>
                 </a>
                 <!-- add -->
                 <a href="{{ route('posts.create') }}" class="btn top-icon-button print-none" title="Create new element">
                     <i class="bi bi-pencil"></i>
                 </a> --}}

                 <a href="{{ route('posts.edit', $post->id) }}" class="btn top-icon-button print-none  ms-auto" title="Edit"><i
                    class="bi bi-pencil"></i></a>
                 <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline"
                     onsubmit="return confirm('Are you sure want to delete?')">
                     @csrf
                     @method('DELETE')
                     <button type="submit" class="btn table-small-button" title="Trash">
                         <i class="bi bi-trash"></i>
                     </button>
                 </form>
             </div>

            <!-- content body -->
            <div class="card-body p-2">
                <div class="entry-wrap">
                    <div class="row ">
                        <div class="row mt-4">
                            <div class="col-7">
                                <div class="row">
                                    <div class="col-md-3">
                                        <strong class="small"> Post title: </strong>
                                    </div>
                                    <div class="col-md-9">
                                        <span>{!! $post->title !!}</span>
                                    </div>

                                    <div class="col-md-3">
                                        <strong class="small"> Category: </strong>
                                    </div>
                                    <div class="col-md-9">
                                        <span>{!! $post->category->name !!}</span>
                                    </div>

                                    <div class="col-md-3 mb-2">
                                        <strong class="small"> Subcategory: </strong>
                                    </div>
                                    <div class="col-md-9">
                                        <span>{!! $post->subcategory ? $post->subcategory->name : 'n/a' !!}</span>
                                    </div>

                                    <div class="col-md-3">
                                        <strong class="small"> Tags: </strong>
                                    </div>

                                    <div class="col-md-9">
                                        @foreach ($tagNames as $tagName )
                                             <span>{!! $tagName .' ,' !!}</span>
                                        @endforeach
                                    </div>

                                    <div class="col-md-3">
                                        <strong class="small"> Can comment: </strong>
                                    </div>
                                    <div class="col-md-9">
                                        <span>{!! $post->can_comment == 0 ? 'No' : 'Yes' !!}</span>
                                    </div>

                                    <div class="col-md-3">
                                        <strong class="small"> Can published: </strong>
                                    </div>
                                    <div class="col-md-9">
                                        <span>
                                             @if (!$post->isPublished())
                                                Not
                                            @endif
                                                Published
                                        </span></span>
                                    </div>

                                    <div class="col-md-3">
                                        <strong class="small"> Reporter name : </strong>
                                    </div>
                                    <div class="col-md-9">
                                        <span>{!! $post->reporter ? $post->reporter->name : 'n/a' !!}</span>
                                    </div>

                                    <div class="col-md-3">
                                        <strong class="small"> Short Description : </strong>
                                    </div>
                                    <div class="col-md-9">
                                        <span>{!! $post->short_description ? $post->short_description : 'n/a' !!}</span>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <strong class="small"> Image title name : </strong>
                                    </div>
                                    <div class="col-md-8">
                                        <span>{!! $post->image_title ? $post->image_title : 'n/a'!!}</span>
                                    </div>

                                    <div class="col-md-4">
                                        <strong class="small"> Post image : </strong>
                                    </div>
                                    <div class="col-md-8">
                                        @if ($post->hasMedia(\Modules\Posts\Entities\Post::MEDIA_COLLECTION_AVATAR))
                                            <img class="img-thumbnail" src="{{ $post->getFirstMediaUrl(\Modules\Posts\Entities\Post::MEDIA_COLLECTION_AVATAR) }}" alt="" style="width:100%; height:100px">
                                       @endif
                                    </div>

                                    <div class="col-md-4">
                                        <strong class="small"> Thumbnail image : </strong>
                                    </div>
                                    <div class="col-md-8">
                                        @if ($post->hasMedia(\Modules\Posts\Entities\Post::MEDIA_CONVERSION_AVATAR_THUMBNAIL))
                                            <img class="img-thumbnail" src="{{ $post->getFirstMediaUrl(\Modules\Posts\Entities\Post::MEDIA_CONVERSION_AVATAR_THUMBNAIL) }}" alt="" style="width:100%; height:100px">
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                               <div class="row">
                                    <div class="col-md-10">
                                        {{-- <span>Content: </span> --}}
                                        <strong class="small">Post content : </strong>
                                        <span>{!! $post->content !!}</span>
                                    </div>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!-- card head end -->
    </div>

 @endsection
