<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo; 
use Illuminate\Database\Eloquent\Relations\HasMany; 


class Caregiver extends Model
{
    protected $table = 'caregiver'; 
    protected $primaryKey = 'caregiver_id';
    protected $fillable = [
        'name', 'address', 'photo', 'is_verified', 'status',
        'account_id', 'city_id', 'category_id', 'education_id'
    ];

    public function account(): BelongsTo {
        return $this->belongsTo(Account::class, 'account_id', 'account_id');
    }

    public function city(): BelongsTo {
        return $this->belongsTo(City::class, 'city_id', 'city_id');
    }

    public function category(): BelongsTo {
        return $this->belongsTo(CaregiverCategory::class, 'category_id', 'caregiver_category_id');
    }

    public function education(): BelongsTo {
        return $this->belongsTo(Education::class, 'education_id', 'education_id');
    }

    public function job_applies(): HasMany {
        return $this->hasMany(JobApply::class, 'applied_id', 'caregiver_id');
    }


}