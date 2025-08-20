<?php

namespace App\Http\Requests\API\Project;

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
            'code' => 'string|unique|required',
            'name' => 'string|required',
            'icon' => 'string|required',
            'description' => 'string|required',
            'contractor' => 'string|required',
            'address' => 'address|required',
            'date_start' => 'date|required',
            'date_end' => 'date|required',
            'budget' => 'float|required'
        ];
    }
}
