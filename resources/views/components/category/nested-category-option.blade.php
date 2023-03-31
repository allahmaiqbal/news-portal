{{-- @props([
'categories'
])

@forelse($categories as $category)
<ul @class([ 'py-1'=> $category->parent_id ])>
    <li class="py-1">
        {{ $category->name }}
        @can('category.show')
        <a href="{{ route('category.show', $category->id) }}" class="btn btn-sm btn-outline-primary">
            <x-icons.show />
        </a>
        @endcan

        @can('category.edit')
        <a href="{{ route('category.edit', $category->id) }}" class="btn btn-sm btn-outline-info">
            <x-icons.edit />
        </a>
        @endcan
        @can('category.destroy')
        <form action="{{ route('category.destroy', $category->id) }}" method="POST" class="d-inline"
            onsubmit="return confirm('Are you sure want to delete?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-outline-danger">
                <x-icons.delete />
            </button>
        </form>
        @endcan

        <x-category.nested-category-ul :categories="$category->children" />
    </li>
</ul>
@empty
@endforelse --}}

@props(['categories', 'level', 'selected_parent_id' => null])

@forelse ($categories as $category)
    <option value="{{ $category->id }}" @selected($category->id == $selected_parent_id)>
        @for ($i = 0; $i < $level; $i++)
            &nbsp;&nbsp
            @endfor @if ($category->parent_id && $level != 0)
                --
            @endif
            {{ $category->name }}
    </option>

    <x-category.nested-category-option :categories="$category->children" :level="$level + 1" :selected_parent_id="$selected_parent_id" />
@empty
@endforelse
