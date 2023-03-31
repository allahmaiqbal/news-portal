<?php

namespace Modules\Reporter\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReporterStoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required|string|max:100',
            'mobile'=>'nullable|digits:11',
            'email'=>'nullable|string',
            'address'=>'nullable|string|max:500',
            'image'=>''
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
