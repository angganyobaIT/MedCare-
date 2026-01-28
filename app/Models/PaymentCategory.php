<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\HasMany;

class PaymentCategory extends Model
{
    protected $fillable=['category'];

    public function payments():hasMany{
        return $this->hasMany(Payment::class, 'category_id','payment_category_id');
    }
}
