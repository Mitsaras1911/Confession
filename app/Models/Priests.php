<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Priests extends Model
{
    use HasFactory;

    protected $fillable = [
        'rank','name','surname','churchName','parish','age','phoneNumber','user_id'
    ];

    /*
     *          $table->integer('user_id');//FOR AUTHENTICATION
            $table->integer('rank');//
            $table->string('name');
            $table->string('surname');
            $table->string('churchName');
            $table->string('parish');
            $table->integer('age');
            $table->string('phoneNumber');
            $table->boolean('verifiedByAdmin');
            $table->timestamps();
            $table->softDeletes();*/

    public function setPhoneNumberAttribute($value)
    {
        // Remove spaces from the phone number before saving
        $this->attributes['phoneNumber'] = str_replace(' ', '', $value);
    }

    public function appointments(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Appointments::class,'priest_id');
    }

    public function month_schedule(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Calendar::class,'priest_id');
    }

    public function priestUser(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class,'priest_id');

    }
}
