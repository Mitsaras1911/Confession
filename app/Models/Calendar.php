<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    use HasFactory;

    protected $hidden = [
        'priest_id','deleted_at','created_at','updated_at'
      /*
       *  "priest_id": 2,
                    "location": "Addison Knoll",
                    "date": "2024-03-01 00:00:00",
                    "slotSize": 30,
                    "disabled": 0,
                    "startingTimeAt": "00:00:00",
                    "endingTimeAt": "23:59:59",
                    "deleted_at": null,
                    "created_at": "2024-03-13T21:41:49.000000Z",
                    "updated_at": "2024-03-13T21:41:49.000000Z"*/
    ];
    public function priest(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Priests::class, 'priest_id');
    }

}
