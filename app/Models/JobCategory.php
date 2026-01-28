<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\HasMany;


class JobCategory extends Model
{
    protected $fillable=['category'];

    public function jobs():HasMany{
        return $this->hasMany(Job::class, 'category_id','job_category_id');
    }

}
