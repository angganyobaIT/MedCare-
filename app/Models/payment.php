<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    protected $fillable=['payment_status', 'category_id'];

    public function job():BelongsTo{
        return $this->belongsTo(Job::class, 'job_id', 'payment_id');
    }
}
