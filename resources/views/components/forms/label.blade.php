@props([
    'required' => '',
    'for' => '',
])

<label class="form-label mt-1 {{ $required ? 'required' : '' }}" for="{{ $for }}" {{ $attributes }}>
    {{ $slot }}
</label>
