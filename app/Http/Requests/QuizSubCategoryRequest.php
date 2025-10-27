<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class QuizSubCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'quiz_category_id' => 'required|exists:quiz_categories,id',
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('quiz_subcategories', 'name')
                    ->where('quiz_category_id', $this->quiz_category_id),
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'quiz_category_id.required' => 'Please select a quiz category.',
            'quiz_category_id.exists' => 'The selected quiz category does not exist.',
            'name.required' => 'Please enter a subcategory name.',
            'name.unique' => 'This subcategory name already exists.'
        ];
    }
}
