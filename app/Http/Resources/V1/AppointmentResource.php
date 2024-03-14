<?php

namespace App\Http\Resources\V1;

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
        $confessing_priest = Priests::find($this->priest_id);
        return [
            'id'=> $this->id,
            'confessorName'=>$this->confessorName,
            'responseMsg'=>$this->responseMessage,
            'phoneNumber'=>$this->phoneNumber,
            'date' => $this->date,
            'time'=> $this->time,
            'duration'=>$this->slotCount,
            'confessing_priest'=>$confessing_priest
        ];
    }
}
