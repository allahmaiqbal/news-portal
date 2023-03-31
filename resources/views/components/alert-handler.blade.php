@if (session()->has('success'))
    <x-alert :message="session()->get('success')" type="success"></x-alert>
@endif

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <x-alert :message="$error" type="danger"></x-alert>
    @endforeach
@endif
