<?php

namespace Modules\Tag\Http\Requests;

use Illuminate\Support\Str;
use Illuminate\Foundation\Http\FormRequest;
use Modules\Tag\Entities\Tag;

class TagStoreRequest extends FormRequest
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
        ];
    }


    public function validated($key = null, $default = null)
    {

        $validated = parent::validated();

        $slug =$this->makeSlug($validated['name']);

        // Check if a tag with the same slug already exists
        $existingTag = Tag::where('slug', $slug)->first();

        // If a tag with the same slug already exists, append a random string to the slug
        if ($existingTag) {
            $slug .= '-' . Str::random(5);
        }

        return $validated + [
            'slug' => $slug,
        ];
     }

    private function makeSlug($string)
    {
        // Remove any leading or trailing whitespace
        $string = trim($string);

        // Replace any remaining spaces with hyphens
        $string = preg_replace('/ +/u', '-', $string);

        // Convert the string to lowercase
        $string = mb_strtolower($string, 'UTF-8');

        return $string;
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
