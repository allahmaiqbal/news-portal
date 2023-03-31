@props(['categories'])

@forelse($categories as $category)
    <ul @class(['py-1' => $category->parent_id])>
        <li class="py-1">
            {{ $category->name }}
            @can('category.show')
                {{-- <a href="{{ route('category.show', $category->id) }}" class="btn btn-sm btn-outline-primary">
                    <x-icons.show />
                    <i class="bi bi-eye-fill"></i>
                </a> --}}
            @endcan

            @can('category.edit')
                <a href="{{ route('category.edit', $category->id) }}" class="btn btn-sm btn-outline-info">
                    {{-- <x-icons.edit /> --}}
                    <i class="bi bi-pencil"></i>
                </a>
            @endcan
            @can('category.destroy')
                <form action="{{ route('category.destroy', $category->id) }}" method="POST" class="d-inline"
                    onsubmit="return confirm('Are you sure want to delete?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-outline-danger">
                        {{-- <x-icons.delete /> --}}
                        <i class="bi bi-trash"></i>
                    </button>
                </form>
            @endcan

            <x-category.nested-category-ul :categories="$category->children" />
        </li>
    </ul>
@empty
@endforelse
