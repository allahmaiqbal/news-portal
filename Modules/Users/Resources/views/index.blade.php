@extends('users::layouts.master')

@section('title', 'Users')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mt-4">
                <div class="card-header text-center fs-4">
                    Users
                    <div class="float-end">
                        @can('users.create')
                            <a class="btn btn-sm btn-primary text-white" href="{{ route('users.create') }}"
                               title="Add new">
                                <x-icons.create/>
                            </a>
                        @endcan
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover mb-0">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col" class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($users as $user)
                            <tr>
                                <th scope="row">
                                    {{ $users->firstItem() + $loop->index }}
                                </th>
                                <td>
                                    {{ $user->name }}
                                    <div class="flex">
                                        @forelse($user->roles as $role)
                                            @can('roles.show')
                                                <a href="{{ route('roles.show', $role->id) }}"
                                                   class="link-light text-decoration-none" target="_blank">
                                                    @endcan
                                                    <span class="badge rounded-pill text-bg-dark">
                                                        {{ $role->name }}
                                                    </span>
                                                    @can('roles.show')
                                                </a>
                                            @endcan
                                        @empty
                                        @endforelse
                                    </div>
                                </td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td class="text-center">
                                    @can('users.show')
                                        <a href="{{ route('users.show', $user->id) }}"
                                           class="btn btn-sm btn-outline-primary">
                                            <x-icons.show/>
                                        </a>
                                    @endcan

                                    @can('users.edit')
                                        <a href="{{ route('users.edit', $user->id) }}"
                                           class="btn btn-sm btn-outline-info">
                                            <x-icons.edit/>
                                        </a>
                                    @endcan

                                    @can('users.destroy')
                                        <form action="{{ route('users.destroy', $user->id) }}" method="POST"
                                              class="d-inline"
                                              onsubmit="return confirm('Are you sure want to delete?')"
                                        >
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger">
                                                <x-icons.delete/>
                                            </button>
                                        </form>
                                    @endcan
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="10" class="text-center">No users found</td>
                            </tr>
                        @endforelse
                        </tbody>

                        <thead class="border-white">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col" class="text-center">Actions</th>
                        </tr>
                        </thead>
                    </table>

                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
