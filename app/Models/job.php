<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\BelongsTo;
use Illuminate\Database\Eloquent\HasMany;


class Job extends Model
{
    protected $fillable=['title', 'picture', 'salary', 'description', 'status', 'review_rating', 'account_id', 'city_id', 'category_id'];

    protected $table = 'job';

    public function account():BelongsTo{
        return $this->belongsTo(Account::class, 'account_id', 'account_id');
    }

    public function city():BelongsTo{
        return $this->belongsTo(City::class, 'city_id', 'city_id');
    }

    public function job_category():BelongsTo{
        return $this->belongsTo(JobCategory::class, 'category_id', 'job_category_id');
    }

    public function job_applies():HasMany{
        return $this->HasMany(JobApply::class, 'job_id', 'job_id');
    }
}
