<?php

namespace App\Http\Requests\Dashboard\Course;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'name' => 'required|max:191|unique:courses,name',
            'description' => 'required',
            'category_id' => 'required|exists:categories,id',
            'rating' => 'required|numeric|between:0,5',
            'levels' => 'required|in:beginner,immediat,high',
            'hours' => 'required|numeric|gt:0',
            'active' => 'required|in:0,1'
        ];
    }
}
