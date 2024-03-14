<?php

namespace App\Http\Requests\v1;

use Illuminate\Foundation\Http\FormRequest;

class StoreAppointmentsRequest extends FormRequest
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
            'confessorName' => ['required'] ,
            'phoneNumber' => ['required'] ,
            'date' => ['required'] ,
            'time' => ['required'] ,
            'slotCount' => ['required'] ,
        ];
    }

    /*
     *       $table->id();
            $table->integer('priest_id');//RELATION WITH PRIESTS TABLE
            $table->string('confessorName');
            $table->string('responseMessage')->nullable();
            $table->string('phoneNumber');
            $table->string('date');
            $table->string('time');
            $table->integer('slotCount');
            $table->string('status');//Approoved,Pending,Declined

            $table->softDeletes();
            $table->timestamps();
        });*/
}
