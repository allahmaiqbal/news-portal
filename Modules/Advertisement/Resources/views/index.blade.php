@extends('page::layouts.master')

@section('title', 'Advertisement')

@section('content')
 <!-- container menu -->
 <div class="container print-none">
    <ul class="nav nav-tabs mt-2">
        <li class="nav-item">
            <a class="nav-link active">All advertise</a>
        </li>
    </ul>
</div>
<!-- container menu end -->

<div class="container">
    <div class="card mb-5 border-0">
        <div class="card-header p-0 border-0 d-flex">
            <!-- page title -->
            <div class="mt-3">
                <h4 class="main-title">Create advertise</h4>
            </div>
        </div>
    </div>

    <div class="card-body p-0 pt-3">
        <form action="{{ route('add-advertise.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="row mb-2">
                    <h3 class="text-center mb-4">Home page advertise</h3>
                    <div class="col-4">
                        @if ($advertise_1_img)
                        <img class="img-thumbnail" src="{{ Storage::url($advertise_1_img) }}" alt="image" style="width:330px; height: 120px;">
                        @endif
                        <x-forms.label for="advertise_1_img" required>
                            Advertise 1 image (729 x 90)
                        </x-forms.label>
                        <x-forms.input type="file" name="advertise_1_img" id="advertise_1_img"  />
                    </div>

                    <div class="col-4">
                        @if ($advertise_2_img)
                        <img class="img-thumbnail" src="{{ Storage::url($advertise_2_img) }}" style="width:330px; height: 120px;">
                        @endif
                        <x-forms.label for="advertise_2_img" required>
                            Advertise 2 image (729 x 90)
                        </x-forms.label>
                        <x-forms.input type="file" name="advertise_2_img" id="advertise_2_img"  />
                    </div>

                    <div class="col-4">
                        @if ($advertise_3_img)
                        <img class="img-thumbnail" src="{{ Storage::url($advertise_3_img) }}" style="width:330px; height: 120px;">
                        @endif
                        <x-forms.label for="advertise_3_img" required>
                            Advertise 3 image (729 x 90)
                        </x-forms.label>
                        <x-forms.input type="file" name="advertise_3_img" id="advertise_3_img"  />
                    </div>

                    <div class="col-4">
                        @if ($advertise_4_img)
                        <img class="img-thumbnail" src="{{ Storage::url($advertise_4_img) }}" alt="image" style="width:267xpx; height: 300px;">
                        @endif
                        <x-forms.label for="advertise_5_img" required>
                            Advertise 4 image (267x 600)
                        </x-forms.label>
                        <x-forms.input type="file" name="advertise_4_img" id="advertise_4_img"  />
                    </div>
               </div>

               <div class="row mt-4">
                <h3 class="text-center mb-4">Full news page advertise</h3>
                <div class="col-4">
                    @if ($advertise_5_img)
                    <img class="img-thumbnail" src="{{ Storage::url($advertise_5_img) }}" alt="image" style="width:330px; height: 150px;">
                    @endif
                    <x-forms.label for="advertise_5_img" required>
                        Advertise 1 image (767 x 100)
                    </x-forms.label>
                    <x-forms.input type="file" name="advertise_5_img" id="advertise_5_img"  />
                </div>

                <div class="col-4">

                    @if ($advertise_6_img)
                    <img class="img-thumbnail" src="{{ Storage::url($advertise_6_img) }}" alt="image" style="max-width: 250px; max-height: 150px;">
                    @endif

                    <x-forms.label for="advertise_6_img" required>
                        Advertise 2 image  (350 x 230)
                    </x-forms.label>
                    <x-forms.input type="file" name="advertise_6_img" id="advertise_6_img"  />
                </div>

                <div class="col-4">

                    @if ($advertise_7_img)
                    <img class="img-thumbnail" src="{{ Storage::url($advertise_7_img) }}" alt="image" style="width: 150px; height: 350px;">
                    @endif

                    <x-forms.label for="advertise_7_img" required>
                        Advertise 3 image (600 x 160)
                    </x-forms.label>
                    <x-forms.input type="file" name="advertise_7_img" id="advertise_7_img"  />
                </div>
           </div>

            <div class="row mb-3">
                <div class="col-2">
                    <label class="form-label mt-1">&nbsp;</label>
                </div>

                <div class="col-12">
                    <x-buttons.save />
                </div>
            </div>
        </form>
    </div>
</div>
{{-- <div class="col-12">
    @if ($advertise_1_img)
    <img class="img-thumbnail" src="{{ Storage::url($advertise_1_img) }}" alt="image" width="150" height="150">
    @endif
    <x-forms.label for="advertise_1_img" required>
        Advertise 1 image
    </x-forms.label>
    <x-forms.input type="file" name="advertise_1_img" id="advertise_1_img"  />
</div> --}}
   {{-- <h1>up comming</h1>
   <form action="{{ route('add-advertise.store') }}" method="POST" enctype="multipart/form-data">
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
