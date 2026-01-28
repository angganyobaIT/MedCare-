<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Education extends Model
{
    protected $table = 'education';

    protected $primaryKey = 'education_id';

    protected $fillable = ['category'];

    public function caregivers(): HasMany
    {
        // Parameter 2: Foreign Key yang ada di tabel 'caregiver'
        // Parameter 3: Local Key yang ada di tabel 'education'
        return $this->hasMany(Caregiver::class, 'education_id', 'education_id');
    }
}