<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class City extends Model
{
    protected $table = 'cities'; 
    protected $primaryKey = 'city_id';
    protected $fillable = ["city_name", "province_id"];

    public function province(): BelongsTo
    {
        return $this->belongsTo(Province::class, 'province_id', 'province_id');
    }

    public function caregivers(): HasMany 
    {
        return $this->hasMany(Caregiver::class, 'city_id', 'city_id');
    } 
}