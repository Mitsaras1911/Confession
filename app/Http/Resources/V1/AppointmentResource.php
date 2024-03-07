<?php

namespace App\Http\Resources\V1;

use App\Models\Priests;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AppointmentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        /*
         * To calculate duration
         * 1.Get the calendar day for the specific priest for the specific date the user selected
         * 2.Get the slot_size for this day
         * 3.Multiply the slot_count X slot_size
         */

        return [
            'confessorName'=>$this->confessor_name,
            'responseMsg'=>$this->response_message,
            'phoneNumber'=>$this->phone_number,
            'dateTime'=>$this->date.' , '.$this->time,
            'duration'=>''
         /*   $table->id();
        $table->integer('priest_id');//RELATION WITH PRIESTS TABLE
        $table->string('confessor_name');
        $table->string('response_message')->nullable();
        $table->string('phone_number');
        $table->string('date');
        $table->string('time');
        $table->integer('slot_count');
        $table->string('status');//Approoved,Pending,Declined*/
        ];
    }
}
