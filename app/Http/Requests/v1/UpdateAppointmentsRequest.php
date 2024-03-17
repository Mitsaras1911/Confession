<?php

namespace App\Http\Requests\v1;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateAppointmentsRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        //$method = $this->method();

        if($this->method() == 'PUT'){
            return [
                'confessorName' => ['required'] ,
                'phoneNumber' => ['required'] ,
                'date' => ['required'] ,
                'time' => ['required'] ,
                'slotCount' => ['required'] ,
                'priest_id' => ['required']
            ];
        }else{
            return [
                'confessorName' => ['sometimes','required'] ,
                'phoneNumber' => ['sometimes','required'] ,
                'date' => ['sometimes','required'] ,
                'time' => ['sometimes','required'] ,
                'slotCount' => ['sometimes','required'] ,
                'priest_id' => ['sometimes','required']
            ];

        }





    }
}
