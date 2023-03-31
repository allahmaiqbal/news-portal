<?php

namespace Modules\Category\Http\Requests;

use Illuminate\Support\Str;
use Illuminate\Foundation\Http\FormRequest;
use Modules\Category\Entities\Category;

class CategoryStoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'page_id'=>'required',
            'name' => 'required|string|max:191',
            'description' => 'nullable|string|max:5000',
        ];
    }

    /**
     * Get the validated data from the request.
     *
     * @param  string|null  $key
     * @param  mixed  $default
     * @return mixed
     */
    public function validated($key = null, $default = null)
    {
        $validated = parent::validated();

        return $validated + [
            'slug' => Str::uniqueSlug(Category::class, $this->name),
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
