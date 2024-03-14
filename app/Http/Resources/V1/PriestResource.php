<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PriestResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'rank'=>$this->rankToString(),
            'fullName' => $this->name.' '.$this->surname.' ('.$this->age.')',
            'parish'=>$this->parish.', '.$this->church_name,
        ];
    }

    public function rankToString(){
        return match ($this->rank) {
            '1' => 'Πρεσβυτερος',
            '2' => 'Πρωτοπρεσβύτερος',
            '3' => 'Αρχιμανδρίτης',
            '4' => 'Μητροπολίτης',
        };


        }
}
