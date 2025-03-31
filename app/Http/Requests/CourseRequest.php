<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
        $id=0;
        if(request()->has('id')){$id=request()->id;}
        return [
            'name'                  => "required|string|max:255|unique:courses,name,$id,id|regex:/^[\p{L}\p{M}\p{N}\p{Pd}\p{Pc}\p{Zs}]+$/u",
            'description'           => "required|string",
            'durations'             => ['required', 'array', 'min:1'],
            'durations.*.duration'  => ['required', 'integer', 'min:1'],
            'durations.*.mrp'       => ['required', 'numeric', 'min:0'],
            'durations.*.fix_price' => ['required', 'numeric', 'min:0', 'lt:durations.*.mrp'],
        ];
    }
}
