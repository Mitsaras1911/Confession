<?php

namespace App\Http\Requests\v1;

use Illuminate\Foundation\Http\FormRequest;

class StoreCalendarRequest extends FormRequest
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
        /*
         *     $table->integer('priest_id');
            $table->string('location');
            $table->string('date');
            $table->integer('slotSize');
            $table->boolean('disabled');
            $table->string('startingTimeAt');
            $table->string('endingTimeAt');
*/
        return [


        ];
    }
}
