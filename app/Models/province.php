<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Province extends Model
{
    protected $primaryKey = 'province_id';

    protected $fillable=['province_name', 'country_id'];

    public function country():BelongsTo{
        return $this->belongsTo(Country::class, 'country_id', 'country_id');
    }

    public function cities():HasMany{
        return $this->hasMany(City::class, 'province_id', 'province_id');
    }
}
