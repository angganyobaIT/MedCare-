<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class City extends Model
{
    protected $primaryKey='city_id';
    protected $fillable=["city_name", 'province_id'];

    public function province():BelongsTo{
        return $this->belongsTo(Province::class, 'province_id', 'province_id');
    }
}
