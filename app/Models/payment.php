<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    protected $fillable=['payment_status'];

    public function payment_category():BelongsTo{
        return $this->hasMany(payment_category::class, 'category_id', 'payment_category_id');
    }
}
