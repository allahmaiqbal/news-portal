@extends('page::layouts.master')

@section('title', 'Advertisement')

@section('content')
   <h1>up comming</h1>
   {{-- <form action="#" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <div class="row">
            <div class="col-md-3">

                @if ($advertise_1_img)
                <img class="img-thumbnail" src="{{ Storage::url($advertise_1_img) }}" alt="image" height="200">
            @endif
                <div class="mb-3">
                    <label for="advertise_1_img" class="form-label">Advertise 1 image</label>
                    <input class="form-control" name="advertise_1_img" type="file" id="advertise_1_img">

                    @error('advertise_1_img')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="advertise-link1" class="form-label">Link 1</label>
                    <input type="text" class="form-control @error('advertise_link1') is-invalid @enderror"
                        id="advertise-link1"
                        name="advertise_link1" value="{{ old('advertise_link1',$advertise_link1) }}"
                        placeholder="Enter advertise link1">
                    @error('advertise_link1')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>

            <div class="col-md-3">
                @if ($advertise_2_img)
                    <img class="img-thumbnail" src="{{Storage::url($advertise_2_img); }}" alt="image" height="200">
               @endif
                <div class="mb-3">
                    <label for="advertise_2_img" class="form-label">Advertise 2 image</label>
                    <input class="form-control" name="advertise_2_img" type="file" id="advertise_2_img">

                    @error('advertise_2_img')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="advertise-link2" class="form-label">Link 2</label>
                    <input type="text" class="form-control @error('advertise_link2') is-invalid @enderror"
                        id="advertise-link2"
                        name="advertise_link2" value="{{ old('advertise_link2',$advertise_link2) }}"
                        placeholder="Enter advertise link2">
                    @error('advertise_link2')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>

            <div class="col-md-3">
                  @if ($advertise_3_img)
                    <img class="img-thumbnail" src="{{Storage::url($advertise_3_img); }}" alt="image" height="200">
               @endif
                <div class="mb-3">
                    <label for="advertise_3_img" class="form-label">Advertise 3 image</label>
                    <input class="form-control" name="advertise_3_img" type="file" id="advertise_3_img">
                    @error('advertise_3_img')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="advertise-link3" class="form-label">Link 3</label>
                    <input type="text" class="form-control @error('advertise_link3') is-invalid @enderror"
                        id="advertise-link3"
                        name="advertise_link3" value="{{ old('advertise_link3',$advertise_link3) }}"
                        placeholder="Enter advertise link3">
                    @error('advertise_link3')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>

            <div class="col-md-3">
                @if ($advertise_4_img)
                    <img class="img-thumbnail" src="{{Storage::url($advertise_4_img); }}" alt="image" height="200">
                @endif
                <div class="mb-3">
                    <label for="advertise_4_img" class="form-label">Advertise 4 image</label>
                    <input class="form-control" name="advertise_4_img" type="file" id="advertise_4_img">
                    @error('advertise_4_img')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="advertise-link4" class="form-label">Link 3</label>
                    <input type="text" class="form-control @error('advertise_link4') is-invalid @enderror"
                        id="advertise-link4"
                        name="advertise_link4" value="{{ old('advertise_link4',$advertise_link4) }}"
                        placeholder="Enter advertise link4">
                    @error('advertise_link4')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
   </form> --}}
@endsection
