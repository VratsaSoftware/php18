<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseCreateRequest extends FormRequest
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
            'course_name' => 'required|unique:courses,name',
        ];
    }

    public function messages()
    {
        return [
            'course_name.required' => 'Полето задължително',
            'course_name.unique' => 'Полето трябва да бъде уникално',
        ];
    }
}
