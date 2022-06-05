<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'category_id' => ['nullable','integer'],
            'name' => ['nullable','string', 'max:255'],
            'title' => ['nullable','string', 'max:255'],
            'short' => ['nullable','string', 'between:30,300'],
            'description' => ['nullable','string','between:30,5000'],
            'image' => ['nullable','mimes:jpeg,jpg,png','max:3000']
        ];
    }
}
