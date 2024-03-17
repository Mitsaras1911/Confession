<?php

namespace App\Http\Requests\v1;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePriestsRequest extends FormRequest
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
    public function rules(): array
    {
        if ($this->method() == 'PUT'){
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
        }else{//method == PATCH

            return [
                'rank' => ['sometimes','required'] ,
                'name' => ['sometimes','required'],
                'surname' => ['sometimes','required'],
                'age' => ['sometimes','required'],
                'parish' => ['sometimes','required'],
                'churchName' => ['sometimes','required'],
                'phoneNumber' =>['sometimes','required'],
                'email'=>['sometimes','required'],
                'password'=>['sometimes','required']
            ];
        }



    }
}
