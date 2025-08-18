<?php

namespace App\Http\Requests\API\Job;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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

            'name' => 'string|required',
            'floor' => 'string|required',
            'project' => 'string|required',
            'object' => 'string|required',
            'executor' => 'string|required',
            'status' => 'string|required',
            'period' => 'string|required',
        ];
    }
}
