<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Patient extends Model
{
    protected $table = 'patients';
    protected $primaryKey = 'email';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['email', 'name', 'phone'];

    public function appointments(): HasMany
    {
        return $this->hasMany(Appointment::class, 'patient_email', 'email');
    }
}
