@extends('page::layouts.master')

@section('title', 'Post')

@section('content')
    <!-- container menu -->
    <div class="container print-none">
        <ul class="nav nav-tabs mt-2">
            <li class="nav-item">
                <a class="nav-link active">All Records</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('posts.create') }}">New Entry</a>
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
                    <p><small>About {{ count($posts) }} results.</small></p>
                </div>
                <!-- refresh -->
                <a href="{{ route('posts.index') }}" class="btn top-icon-button print-none ms-auto" title="Refresh">
                    <i class="bi bi-arrow-clockwise"></i>
                </a>
                <!-- search -->
                <a href="#element-search" class="btn top-icon-button print-none" title="Search" data-bs-toggle="collapse"
                    role="button" aria-expanded="false">
                    <i class="bi bi-search"></i>
                </a>
                <!-- add -->
                <a href="{{ route('posts.create') }}" class="btn top-icon-button print-none" title="Create new element">
                    <i class="bi bi-plus-circle"></i>
                </a>
            </div>

            <!-- content body -->
            <div class="card-body p-0">

                <!-- search collapse -->
                <div class="collapse {{ request()->search ? 'show':'' }}  print-none" id="element-search">
                    <div class="card card-body rounded-0 border-0 px-0">
                        <!-- search form -->
                        <form action="{{route('posts.index')}}" method="GET" >
                            <input type="hidden" value="1" name="search">
                            <div class="row gy-1 gx-3">
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <label for="title" class="form-label">Title:</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Search post title" value="{{ request('title') }}">
                                </div>

                                <div class="col-12 col-sm-6 col-lg-3">
                                    <label for="category" class="form-label">Category:</label>
                                    <select id="category" class="form-select " name="category">
                                        <option value="" >All posts</option>
                                        @foreach($categories as $category)

                                            <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-12 col-sm-6 col-lg-3">
                                    <label for="published" class="form-label">Published:</label>
                                    <select id="published" class="form-select " name="published">
                                        <option value="" >All posts</option>
                                        <option value="1" {{ request('published') == '1' ? 'selected' : '' }}>Published</option>
                                        <option value="0" {{ request('published') == '0' ? 'selected' : '' }}>Not Published</option>
                                    </select>
                                </div>

                               <div class="col-12 col-sm-6 col-lg-3">
                                    <label for="breaking_news" class="form-label">Breaking News:</label>
                                    <select name="breaking_news" class="form-select "  id="breaking_news">
                                        <option value="">All posts</option>
                                        <option value="1" {{ request('breaking_news') == 1 ? 'selected' : '' }}>Breaking news</option>
                                        <option value="0" {{ request('breaking_news') == 0 ? 'selected' : '' }}>Not breaking news</option>
                                    </select>
                               </div>


                                <!-- button -->
                                <div class="col-12 col-sm-6 col-lg-2">
                                    <label class="form-label">&nbsp;</label>
                                    <button type="submit" class="btn btn-block w-100 custom-btn btn-success">
                                        {{-- <i class="bi bi-search"></i> --}}
                                        <span class="p-1">Search</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- data -->
                <div class="table-responsive">
                    <table class="table custom-table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Title</th>
                                <th scope="col">Category</th>
                                <th scope="col">Breaking news</th>
                                <th scope="col">Published</th>
                                {{-- <th scope="col">Can comment</th> --}}
                                <th scope="col">Content</th>
                                <th scope="col" class="print-none text-end">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($posts as $post)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{!! Illuminate\Support\Str::limit($post->title, 30, ' ......') !!}</td>
                                    <td>{{ $post->category->name }}</td>
                                     {{-- <td>{{ $post->breaking_news ==1 ? 'Yes':'No' }} <span class="badge bg-danger">Danger</span> --}}
                                     <td class="text-center">
                                        <span @class([
                                            'badge',
                                            $post->breaking_news == 1 ? 'bg-success' : 'bg-warning'
                                        ])>
                                            {{ $post->breaking_news == 1 ? 'Yes' : 'No' }}
                                        </span>
                                    </td>
                                    <td class="text-center">
                                        <span @class([
                                            'badge',
                                            'bg-warning' => !$post->isPublished(),
                                            'bg-success' => $post->isPublished(),
                                        ])>
                                        @if (!$post->isPublished())
                                            Not
                                        @endif
                                        Published
                                        </span>
                                    </td>
                                    {{-- <td>{{ $post->can_comment ? 'Yes' : 'No' }}</td> --}}
                                    <td> {!! Illuminate\Support\Str::limit($post->content, 30, ' ......') !!}</td>
                                    <td class="print-none text-end">
                                        <a href="{{ route('posts.show', $post->id) }}" class="btn table-small-button"
                                            title="View"><i class="bi bi-eye"></i></a>
                                        <a href="{{ route('posts.edit', $post->id) }}" class="btn table-small-button"
                                            title="Update"><i class="bi bi-pencil"></i></a>
                                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST"
                                            class="d-inline" onsubmit="return confirm('Are you sure want to delete?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn table-small-button" title="Trash">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="10" class="print-none">No Page Found !</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- pagination -->
                <div class="float-right">
                    {{ $posts->links() }}
                </div>
                <!--  pagination end -->

            </div>
        </div>
        <!-- card head end -->
    </div>
@endsection
