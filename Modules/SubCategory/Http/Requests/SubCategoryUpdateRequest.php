<?php

namespace Modules\SubCategory\Http\Requests;

use Illuminate\Support\Str;
use Illuminate\Foundation\Http\FormRequest;
use Modules\SubCategory\Entities\SubCategory;

class SubCategoryUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:191',
            'description' => 'nullable|string|max:5000',
            'category_id'=>'required',

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
        $validated_data = parent::validated();

        return $validated_data + [
            'slug' => Str::uniqueSlug(SubCategory::class, $this->name, 'slug', $this->route()->originalParameter('name')),
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
