@extends('reporter::layouts.master')

@section('title', 'Reporter')

@section('content')
<!-- container menu -->
<div class="container print-none">
    <ul class="nav nav-tabs mt-2">
        <li class="nav-item">
            <a class="nav-link active">All Records</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('reporters.create') }}">New Entry</a>
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
                <h4 class="main-title">List of Reporters</h4>
                <p><small>About {{ count($reporters) }} results.</small></p>
            </div>
        </div>

        <!-- content body -->
        <div class="card-body p-0">
            <!-- data -->
            <div class="table-responsive">
                <table class="table custom-table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Reporter Name</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Email</th>
                            <th scope="col">Photos</th>
                            <th scope="col" class="print-none text-end">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($reporters as $reporter)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $reporter->name }}</td>
                            <td>{{ $reporter->mobile }}</td>
                            <td>{{ $reporter->email }}</td>
                            <td>{{ $reporter->image ?$reporter->image:'n/a' }}</td>
                            <td class="print-none text-end">
                                {{-- <a href="element_details.html" class="btn table-small-button" title="View"><i
                                        class="bi bi-eye"></i></a> --}}
                                <a href="{{ route('reporters.edit', $reporter->id) }}" class="btn table-small-button"
                                    title="Update"><i class="bi bi-pencil"></i></a>
                                <form action="{{ route('reporters.destroy', $reporter->id) }}" method="POST" class="d-inline"
                                    onsubmit="return confirm('Are you sure want to delete?')">
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
                            <td colspan="10" class="print-none">No Data Found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- pagination -->
            <div class="float-right">
                {{ $reporters->links() }}
            </div>
            <!--  pagination end -->

        </div>
    </div>
    <!-- card head end -->
</div>
@endsection
