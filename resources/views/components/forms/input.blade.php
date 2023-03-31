@props([
    'value' => '',
    'type' => '',
    'name' => '',
    'rows' => '',
    'cols' => '',
    'id' => '',
    'placeholder' => Str::of($name ?? '')
        ->replace('_', ' ')
        ->title(),
])
@if ($type === 'textarea')
    <textarea name="{{ $name }}" placeholder="{{ $placeholder }}" id="{{ $id }}" cols="{{ $cols }}"
        rows="{{ $rows }}" class="form-control" {{ $attributes }}>{{ $value }}</textarea>
@else
    <input type="{{ $type }}" id="{{ $id }}" name="{{ $name }}" value="{{ $value }}"
        placeholder="{{ $placeholder }}" class="form-control" {{ $attributes }}>
@endif
