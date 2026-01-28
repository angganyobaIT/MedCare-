<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CaregiverCategory extends Model
{
    public function caregiver():HasMany{
        return $this->hasMany(Caregiver::class, 'caregiver_id', 'caregiver_id');
    }
}
