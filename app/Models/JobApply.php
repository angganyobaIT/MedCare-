<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\HasMany;
use Illuminate\Database\Eloquent\BelongsTo;


class job_apply extends Model
{
    protected $fillable=['applied_status'];
    
    public function caregiver():BelongsTo{
        return $this->belongsTo(Caregiver::class, 'caregiver_id', 'caregiver_id');
    }

    public function job():BelongsTo{
        return $this->belongsTo(Job::class, 'job_id', 'job_id');
    }
}
