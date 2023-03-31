@extends('users::layouts.master')

@section('title', 'Edit user')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mt-4">
                <div class="card-header text-center fs-4">
                    Edit user
                    <div class="float-start">
                        @can('users.index')
                            <a class="btn btn-sm btn-secondary text-white" href="{{ route('users.index') }}"
                               title="Back to list">
                                <x-icons.back/>
                            </a>
                        @endcan
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('users.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="mb-3">
                            <label for="name" class="form-label required">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                   name="name" value="{{ old('name', $user->name) }}"
                                   placeholder="Enter name">
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="email" class="form-label required">Email Address</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                           id="email"
                                           name="email" value="{{ old('email', $user->email) }}"
                                           placeholder="Enter email address">
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="form-label required">Phone</label>
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                           id="phone"
                                           name="phone" value="{{ old('phone', $user->phone) }}"
                                           placeholder="Enter phone number">
                                    @error('phone')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="password" class="form-label required">Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                           id="password"
                                           name="password"
                                           placeholder="Enter password">
                                    @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="confirm-password" class="form-label required">Confirm Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                           id="confirm-password"
                                           name="password_confirmation"
                                           placeholder="Retype password">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-1">
                                    Roles
                                </div>
                                <div class="col-md-11">
                                    @forelse($roles as $role)
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                   id="role-{{$loop->iteration}}"
                                                   name="roles[]"
                                                   value="{{ $role->name }}"
                                                @checked($user->roles->pluck('name')->contains($role->name))
                                            >
                                            <label class="form-check-label"
                                                   for="role-{{$loop->iteration}}">{{ $role->name }}</label>
                                        </div>
                                    @empty
                                    @endforelse
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success">Update</button>
                        <a href="" class="btn btn-warning">Reset</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
