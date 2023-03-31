@extends('page::layouts.master')

@section('title', 'Page')

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
        <!-- print header -->
        <div class="print-show print-header border-bottom pb-2">
            <div class="d-flex">
                <div>
                    <h4>MaxSOP</h4>
                    <h6>5B Green House, 27/2 Ram Babu Road, Mymensingh</h6>
                    <p class="text-small"><strong>Phone:</strong>+880 1786 494650, +880 1786 494650</p>
                </div>

                <div class="ms-auto">
                    <p>5 December, 2020</p>
                </div>
            </div>
        </div>
        <!-- print header end -->

        <!-- card head -->
        <div class="card border-0">
            <div class="card-header p-0 d-md-flex align-items-center border-0 d-block">
                <!-- page title -->
                <div class="mt-3 mb-2">
                    <h4 class="main-title">List of posts</h4>
                    {{-- <p><small>About {{ count($categories) }} results.</small></p> --}}
                </div>

                <!-- Print -->
                {{-- <a href="#" class="btn top-icon-button print-none ms-auto" title="Print" onclick="window.print()">
                    <i class="bi bi-printer"></i>
                </a> --}}
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
                <div class="collapse print-none" id="element-search">
                    <div class="card card-body rounded-0 border-0 px-0">
                        <!-- search form -->
                        <form action="#">
                            <div class="row gy-1 gx-3">
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <label for="element-name" class="form-label">Category</label>
                                    <input type="text" name="element_name" class="form-control" id="element-name"
                                        placeholder="Characters only">
                                </div>

                                <div class="col-12 col-sm-6 col-lg-3">
                                    <label for="symbol" class="form-label">Symbol</label>
                                    <input type="text" name="symbol" class="form-control" id="symbol"
                                        placeholder="Capital letter">
                                </div>

                                <!-- button -->
                                <div class="col-12 col-sm-6 col-lg-2">
                                    <label class="form-label">&nbsp;</label>
                                    <button type="submit" class="btn btn-block w-100 custom-btn btn-success">
                                        <i class="bi bi-search"></i>
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
                                <th scope="col">Subcategory</th>
                                <th scope="col">Status</th>
                                <th scope="col">Can comment</th>
                                <th scope="col">Content</th>
                                <th scope="col" class="print-none text-end">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($posts as $post)
                                <tr>
                                    {{-- <td>{{ $post->created_at->format('d F Y H:i:s A') }}</td> --}}
                                    <td>
                                        {{-- @php
                                            $formatter = new IntlDateFormatter('bn_BD', IntlDateFormatter::FULL, IntlDateFormatter::NONE);
                                            $formatter->setPattern('dd MMMM, yyyy , EEEE h:mm:ss a'); // Set the desired format
                                            $banglaDate = $formatter->format($post->created_at);
                                        @endphp
                                        {{ $banglaDate }} --}}
                                    </td>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{!! Illuminate\Support\Str::limit($post->title, 30, ' ......') !!}</td>
                                    <td>{{ $post->category->name }}</td>
                                    <td>{{ $post->subcategory ? $post->subcategory->name : 'n/a' }}</td>
                                    <td class="text-center">
                                        {{-- <span @class([
                                            'badge',
                                            'badge-warning' => !$post->isPublished(),
                                            'badge-success' => $post->isPublished(),
                                        ])> --}}
                                        @if (!$post->isPublished())
                                            Not
                                        @endif
                                        Published
                                        </span>
                                    </td>
                                    <td>{{ $post->can_comment ? 'Yes' : 'No' }}</td>
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
