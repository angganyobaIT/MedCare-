<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\BelongsTo;

class caregiver extends Model
{
    public function category():BelongsTo{
        return $this->belongsTo(caregiver_category::class, 'category_id', 'caregiver_category_id');
    }
}
