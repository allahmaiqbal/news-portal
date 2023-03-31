@extends('category::layouts.master')

@section('title', 'Category')

@section('content')
    <!-- container menu -->
    <div class="container print-none">
        <ul class="nav nav-tabs mt-2">
            <li class="nav-item">
                <a class="nav-link " href="{{ route('category.index') }}">All Records</a>
            </li>

            <li class="nav-item">
                <a class="nav-link active" href="element_entry.html">Category Trash</a>
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
                    <p><small>About {{ count($categories) }} results.</small></p>
                </div>

                <!-- refresh -->
                <a href="element_records.html" class="btn top-icon-button print-none ms-auto" title="Refresh">
                    <i class="bi bi-arrow-clockwise"></i>
                </a>
                <!-- search -->
                <a href="#element-search" class="btn top-icon-button print-none" title="Search" data-bs-toggle="collapse"
                    role="button" aria-expanded="false">
                    <i class="bi bi-search"></i>
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
                    <form action="{{ route('category.trash') }}" method="POST">
                        @csrf
                        <table class="table custom-table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" class="p-0">
                                        <label for="check-all" class="p-2 d-block">
                                            <input type="checkbox" class="me-2" id="check-all">
                                            <span>SL </span>
                                        </label>
                                    </th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col" class="print-none text-end">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                {{-- <div class="row">
                                <div class="col-12">
                                    <div class="card mt-4">
                                        <div class="card-header text-center fs-4">
                                            Categories
                                            <div class="float-end">
                                                <a class="btn btn-sm btn-primary text-white"
                                                    href="{{ route('category.create') }}" title="Add new">
                                                    <x-icons.create />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <x-category.nested-category-ul :categories="$categories" />
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                                @forelse($categories as $category)
                                    <th scope="row" class="p-0">
                                        <label class="p-2 d-block">
                                            <input type="checkbox" name="categories[]" value="{{ $category->id }}"
                                                class="me-2">
                                            {{ $loop->iteration }}.
                                        </label>
                                    </th>
                                    {{-- <th scope="row">{{ $loop->iteration }}</th> --}}
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->description }}</td>
                                    <td class="print-none text-end">
                                        <a href="{{ route('category.restore', $category->id) }}"
                                            class="btn table-small-button" title="Update">
                                            <i class="bi bi-bootstrap-reboot"></i></a>
                                        <form action="{{ route('category.permanentDelete', $category->id) }}"
                                            class="d-inline" onsubmit="return confirm('Are you sure want to delete?')">
                                            <button type="submit" class="btn table-small-button" title="Trash">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="10" class="print-none">No Category Found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="mt-3 text-end">
                            <button class="btn btn-sm btn-success me-2" name="restore" value="1"
                                onclick="return confirm('Do you want to restore all selected record(s)?')"
                                {{ $categories->count() > 0 ? '' : 'disabled' }}>Restore all</button>

                            <button class="btn btn-sm  btn-danger" name="delete" value="1"
                                onclick="return confirm('The selected record(s) will be delete permanently!')"
                                {{ $categories->count() > 0 ? '' : 'disabled' }}>Permanently delete</button>
                        </div>
                    </form>

                </div>

                <!-- pagination -->
                <div class="float-right">
                    {{ $categories->links() }}
                </div>
                <!--  pagination end -->

            </div>
        </div>
        <!-- card head end -->
    </div>
@endsection
@push('scripts')
    <!-- checked all program script -->
    <script>
        // select master & child checkboxes
        let masterCheckbox = document.getElementById("check-all"),
            childCheckbox = document.querySelectorAll('[name="categories[]"]');

        // add 'change' event into master checkbox
        masterCheckbox.addEventListener("change", function() {
            // add/remove attribute into child checkbox conditionally
            for (var i = 0; i < childCheckbox.length; i++) {

                if (this.checked) {
                    childCheckbox[i].checked = true; // add attribute
                } else {
                    childCheckbox[i].checked = false; // add attribute
                }

            }
        });
    </script>
    <!-- checked all program script end -->
@endpush
