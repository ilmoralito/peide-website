<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
        if (isset($this->event)) {
            return [
                'name' => 'required|unique:events,name,' . $this->event->id,
                'image' => 'required|mimes:jpeg,jpg,png|max:1000',
                'price' => 'required',
                'address' => 'required',
                // 'latitude' => 'required',
                // 'longitude' => 'required',
                'description' => 'required'
            ];
        } else {
            return [
                'name' => 'required|unique:events,name',
                'image' => 'required|mimes:jpeg,jpg,png|max:1000',
                'price' => 'required',
                'address' => 'required',
                // 'latitude' => 'required',
                // 'longitude' => 'required',
                'description' => 'required'
            ];
        }
    }
}
