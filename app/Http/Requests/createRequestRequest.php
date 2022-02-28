<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createRequestRequest extends FormRequest
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
        return [
          'address' => 'required|min:5|max:50',
          'message' => 'required|min:15|max:500',
          'price' => 'required|min:5|max:150',
          'Image' => 'required|mimes:png,jpg,jpeg,bmp|max:10240'
        ];
    }
}
