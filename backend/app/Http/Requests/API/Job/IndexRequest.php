<?php

namespace App\Http\Requests\API\Job;

use Illuminate\Foundation\Http\FormRequest;

class IndexRequest extends FormRequest
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
            'id' => 'integer',
            'block' => 'string',
            'floor' => 'string',
            'project' => 'string',
            'room' => 'string',
            'executor' => 'string',
            'status' => 'string',
            'date_start' => 'date',
            'date_end' => 'date',
            'page' => 'integer',
            'per_page' => 'integer',

        ];
    }
}
