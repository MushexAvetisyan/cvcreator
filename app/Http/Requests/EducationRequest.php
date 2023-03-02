<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EducationRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'school_name' => 'required|string|max:255',
            'school_location' => 'required|string|max:255',
            'degree' => 'required|string|max:255',
            'field_of_study' => 'required|string|max:255',
            'graduation_start_date' => 'date|before_or_equal:graduation_end_date',
            'graduation_end_date' => 'date|after_or_equal:graduation_start_date',
        ];
    }
}
