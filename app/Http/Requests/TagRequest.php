<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TagRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if (isset($this->tag)) {
            return [
                'name' => 'required|unique:tags,name,' . $this->tag->id . '|max:255'
            ];
        } else {
            return [
                'name' => [
                    'required', 'unique:tags'
                ]
            ];
        }
    }
}
