<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CaregiverCategory extends Model
{
    protected $table = 'caregiver_categories';
    protected $primaryKey = 'caregiver_category_id';
    protected $fillable = ['category'];

    public function caregivers(): HasMany 
    {
        // Parameter 2: Foreign Key di tabel 'caregiver'
        // Parameter 3: Local Key di tabel 'caregiver_categories'
        return $this->hasMany(Caregiver::class, 'category_id', 'caregiver_category_id');
    }
}