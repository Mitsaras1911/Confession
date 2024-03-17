<?php

namespace App\Http\Requests\v1;

use Illuminate\Foundation\Http\FormRequest;

class StorePriestsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return  $this->user() != null;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array{
        return [
            'rank' => ['required'] ,
            'name' => ['required'],
            'surname' => ['required'],
            'age' => ['required'],
            'parish' => ['required'],
            'churchName' => ['required'],
            'phoneNumber' =>['required'],
            'email'=>['required'],
            'password'=>['required']
        ];
    }
}
