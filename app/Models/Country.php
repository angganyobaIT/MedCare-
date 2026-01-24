<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Country extends Model
{
    protected $fillable=['country_name'];

    public function provinces():HasMany
    {
        return $this->hasMany(Province::class, 'country_id', 'country_id');
    }
}
