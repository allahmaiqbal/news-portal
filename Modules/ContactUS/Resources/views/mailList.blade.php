@extends('contactus::layouts.master')

@section('title', 'email-list')

@section('content')
    <!-- container menu -->
    <div class="container print-none">
        <ul class="nav nav-tabs mt-2">
            <li class="nav-item">
                <a class="nav-link active" href="#">All Emial List</a>
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
                    <h4 class="main-title">List of Email</h4>
                    <p><small>About {{ count($emails) }} results.</small></p>
                </div>
                <!-- refresh -->
                <a href="{{ route('email-list.page') }}" class="btn top-icon-button print-none ms-auto" title="Refresh">
                    <i class="bi bi-arrow-clockwise"></i>
                </a>
            </div>

            <!-- content body -->
            <div class="card-body p-0">
                <!-- data -->
                <div class="table-responsive">
                    <table class="table custom-table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Message</th>
                                <th scope="col">Time</th>
                                <th scope="col" class="print-none text-end">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($emails as $email)
                               <tr class="{{ $email->seen ? 'table-success' : 'table-danger' }}" >
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $email->name }}</td>
                                    <td>{{ $email->email }}</td>
                                    <td>{!! \Illuminate\Support\Str::limit($email->message, 25) !!}</td>
                                    <td>{!! $email->created_at->diffForHumans() !!}</td>
                                    <td class="print-none text-end">
                                        <a href="{{ route('email-show.page',$email) }}" class="btn table-small-button" title="View"><i
                                                    class="bi bi-eye"></i></a>
                                        <form action="{{ route('email-destroy.page', $email->id) }}" method="POST"
                                            class="d-inline" onsubmit="return confirm('Are you sure want to delete?')">
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
                                    <td colspan="10" class="print-none">No Emamil Found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <!-- pagination -->
                {{-- <div class="float-right">
                    {{ $emails->links() }}
                </div> --}}
                <!--  pagination end -->

            </div>
        </div>
        <!-- card head end -->
    </div>
@endsection

