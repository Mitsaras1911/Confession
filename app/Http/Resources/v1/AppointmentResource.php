<?php

namespace App\Http\Resources\v1;

use App\Models\Appointments;
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
        return [
            'id'=> $this->id,
            'confessorName'=>$this->confessorName,
            'responseMsg'=>$this->responseMessage,
            'phoneNumber'=>$this->phoneNumber,
            'date' => $this->date,
            'time'=> $this->time,
            'duration'=>$this->slotCount,
            'confessing_priest'=>$this->confessingPriest,
        ];
    }
}
