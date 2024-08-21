<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AttackCreateRequest extends FormRequest
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
            'name' => 'required|unique:attacks,name|max:50',
            'power' => 'required|integer|min:0|max:200',
            'accuracy' => 'required|integer|min:10|max:100',
            'maxpp' => 'required|integer|min:5|max:45',
            'description' => 'required',
            'category_id' => 'required|exists:categories,id',
            'imgLinkCat' => 'required',
            'type_id' => 'required|exists:types,id',
            'imgLinkType'=> 'required',
        ];
    }
}
