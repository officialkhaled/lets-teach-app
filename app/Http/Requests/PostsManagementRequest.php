<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostsManagementRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => 'required',
            'subject_ids' => 'required|array',
            'class_id' => 'required',
            'medium_id' => 'required',
            'gender_id' => 'required',
            'tutoring_day_id' => 'required',
            'tutoring_type_id' => 'required',
            'salary' => 'required',
            'from_time' => 'required',
            'to_time' => 'required',
            'location' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Title field is required.',
            'subject_ids.required' => 'Subjects field is required.',
            'class_id.required' => 'Class field is required.',
            'medium_id.required' => 'Medium field is required.',
            'gender_id.required' => 'Gender field is required.',
            'tutoring_day_id.required' => 'Tutoring Days/Week field is required.',
            'tutoring_type_id.required' => 'Tutoring Type field is required.',
            'salary.required' => 'Budget field is required.',
            'from_time.required' => 'From Time field is required.',
            'to_time.required' => 'To Time field is required.',
            'location.required' => 'Location field is required.',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
