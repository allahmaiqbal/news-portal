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
                <a class="nav-link" href="{{ route('pages.create') }}" >New Entry</a>
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
                    <h4 class="main-title">List of category</h4>
                    {{-- <p><small>About {{ count($categories) }} results.</small></p> --}}
                </div>

                {{-- <!-- Print -->
                <a href="#" class="btn top-icon-button print-none ms-auto" title="Print" onclick="window.print()">
                    <i class="bi bi-printer"></i>
                </a>
                <!-- refresh -->
                <a href="element_records.html" class="btn top-icon-button print-none" title="Refresh">
                    <i class="bi bi-arrow-clockwise"></i>
                </a>
                <!-- search -->
                <a href="#element-search" class="btn top-icon-button print-none" title="Search" data-bs-toggle="collapse"
                    role="button" aria-expanded="false">
                    <i class="bi bi-search"></i>
                </a>
                <!-- add -->
                <a href="{{ route('pages.create') }}" class="btn top-icon-button print-none" title="Create new element">
                    <i class="bi bi-plus-circle"></i>
                </a> --}}
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
                                    <label for="element-name" class="form-label">Element name</label>
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
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col" class="print-none text-end">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($pages as $page)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $page->name }}</td>
                                    <td>{{ $page->description }}</td>
                                    <td class="print-none text-end">
                                        {{-- <a href="element_details.html" class="btn table-small-button" title="View"><i
                                                class="bi bi-eye"></i></a> --}}
                                        <a href="{{ route('pages.edit', $page->id) }}" class="btn table-small-button"
                                            title="Update"><i class="bi bi-pencil"></i></a>
                                        <form action="{{ route('pages.destroy', $page->id) }}" method="POST"
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
                                    <td colspan="10" class="print-none">No Page Found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- pagination -->
                <div class="float-right">
                    {{ $pages->links() }}
                </div>
                <!--  pagination end -->

            </div>
        </div>
        <!-- card head end -->
    </div>
@endsection
