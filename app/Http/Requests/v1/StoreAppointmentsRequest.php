<?php

namespace App\Http\Requests\v1;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
class StoreAppointmentsRequest extends FormRequest
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
        return [
            'confessorName' => ['required'] ,
            'phoneNumber' => ['required'] ,
            'date' => ['required'] ,
            'time' => ['required'] ,
            'slotCount' => ['required'] ,
            'priest_id' => ['required']
        ];
    }
}
