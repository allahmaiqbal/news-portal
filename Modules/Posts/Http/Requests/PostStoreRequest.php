<?php

namespace Modules\Posts\Http\Requests;

use Illuminate\Support\Str;
use Illuminate\Foundation\Http\FormRequest;
use Modules\Posts\Entities\Post;

class PostStoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:191',
            'category_id'=>'nullable',
            'sub_category_id'=>'nullable',
            'image_title' => 'nullable|max:191',
            'content' => 'required|string|max:10000',
            'can_comment' => 'nullable|boolean',
            'is_published' => 'nullable|boolean',
            'short_description' => 'nullable|string|max:500',
            'tags' => 'nullable',
            'reporter_id' =>'nullable',
            'breaking_news'=>'nullable',
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
            'slug' => Str::uniqueSlug(Post::class, $this->title),
            'published_at' => $this->boolean('is_published') ? now() : null,
            'user_id' => auth()->id(),
            'category_id' => $this->parent_id,
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
