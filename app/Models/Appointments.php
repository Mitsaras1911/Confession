<?php

namespace App\Models;

use Abbasudo\Purity\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    use HasFactory;
    protected $fillable = [
        'priest_id','confessorName','phoneNumber','date','time','slotCount','status'
    ];

    public function setPhoneNumberAttribute($value)
    {
        // Remove spaces from the phone number before saving
        $this->attributes['phoneNumber'] = str_replace(' ', '', $value);
    }

    public function confessingPriest(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Priests::class,'priest_id');


    }
}
