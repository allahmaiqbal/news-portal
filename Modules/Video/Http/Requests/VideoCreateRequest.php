<?php

namespace Modules\Video\Http\Requests;

use Illuminate\Support\Str;
use Illuminate\Foundation\Http\FormRequest;
use Modules\Video\Entities\Video;

class VideoCreateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'category' => 'nullable|string|max:191',
            'title' => 'required|string|max:191',
            'link' => 'required|max:1000',
        ];
    }

    public function validated($key = null, $default = null)
    {
        $validated = parent::validated();

        return $validated + [
            'slug' => Str::uniqueSlug(Video::class, $this->title),
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