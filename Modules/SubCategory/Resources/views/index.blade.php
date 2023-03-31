@extends('category::layouts.master')

@section('title', 'SubCategory')

@section('content')
<!-- container menu -->
<div class="container print-none">
    <ul class="nav nav-tabs mt-2">
        <li class="nav-item">
            <a class="nav-link active" href="{{ route('sub-category.index') }}">All Records</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('sub-category.create') }}">New Entry</a>
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
                <h4 class="main-title">List of SubCategory</h4>
                {{-- <p><small>About {{ count($subCategories) }} results.</small></p> --}}
            </div>
            <!-- refresh -->
            <a href="{{ route('sub-category.index') }}" class="btn top-icon-button print-none ms-auto" title="Refresh">
                <i class="bi bi-arrow-clockwise"></i>
            </a>

            <a href="{{ route('subcategory.trash') }}" class="btn top-icon-button print-none" title="Trash">
                <i class="bi bi-trash"></i>
            </a>

        </div>

        <!-- content body -->
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table custom-table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">SubCategory Name</th>
                            <th scope="col">Description</th>
                            <th scope="col" class="print-none text-end">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($subCategories as $subCategory)
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $subCategory->category?->name  }}</td>
                        <td>{{ $subCategory->name }}</td>
                        <td>{{ $subCategory->description ? $subCategory->description:'n/a' }}</td>
                        <td class="print-none text-end">

                            <a href="{{ route('sub-category.edit', $subCategory->id) }}" class="btn btn-sm table-small-button"
                                title="Update"><i class="bi bi-pencil"></i></a>
                            <form action="{{ route('sub-category.destroy', $subCategory->id) }}" method="POST" class="d-inline"
                                onsubmit="return confirm('Are you sure want to delete?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm table-small-button" title="Trash">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="10" class="print-none">No SubCategory Found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <!-- pagination -->
            <div class="float-right">
                {{ $subCategories->links() }}
            </div>
            <!--  pagination end -->

        </div>
    </div>
    <!-- card head end -->
</div>
@endsection

