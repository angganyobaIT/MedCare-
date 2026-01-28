<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\BelongsTo;

class Caregiver extends Model
{
    public function accounts():BelongsTo{
        return $this->belongsTo(account::class, 'account_id', 'account_id');
    }

    public function cities():BelongsTo{
        return $this->belongsTo(City::class, 'city_id', 'city_id');
    }

    public function categories():BelongsTo{
        return $this->belongsTo(CaregiverCategory::class, 'category_id', 'caregiver_category_id');
    }

    public function educations():BelongsTo{
        return $this->belongsTo(Education::class, 'education_id', 'education_id');
    }

    

    
}
