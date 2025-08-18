<?php

namespace App\Http\Requests\API\Job;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'id' => 'uuid|required',
            'name' => 'string',
            'floor' => 'string',
            'project' => 'string',
            'object' => 'string',
            'executor' => 'string',
            'status' => 'string',
            'period' => 'string',
        ];
    }
}
