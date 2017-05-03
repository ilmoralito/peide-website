<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
        if (isset($this->project)) {
            return [
                'name' => 'required|unique:projects,name,' . $this->project->id,
                'description' => 'required',
                'body' => 'required',
                'url' => 'nullable|url'
            ];
        } else {
            return [
                'name' => 'required|unique:projects,name',
                'description' => 'required',
                'body' => 'required',
                'url' => 'nullable|url'
            ];
        }
    }
}
