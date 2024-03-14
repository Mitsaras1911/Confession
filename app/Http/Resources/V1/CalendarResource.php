<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CalendarResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return
        [
            'location'=>$this->location,
            'date' => $this->date,
            'maxAppointmentTime' => $this->slotSize * 2,
            'disabled' => $this->disabled,
            'from' =>$this->startingTimeAt,
            'to' =>$this->endingTimeAt,
            'priest'=>new PriestResource($this->priest)
        ];
    }
}
