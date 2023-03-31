<?php

namespace Modules\Page\Http\Requests;

use Illuminate\Support\Str;
use Illuminate\Foundation\Http\FormRequest;
use Modules\Page\Entities\Page;

class PageStoreRequest extends FormRequest
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
        ];
    }

    public function validated($key = null, $default = null)
    {
        $validated = parent::validated();

        return $validated + [
            'slug' => Str::uniqueSlug(Page::class, $this->name),
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
