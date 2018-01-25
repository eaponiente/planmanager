<?php

namespace Edgar\PlanManager;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name'
    ];

    protected $dates = ['created_at'];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
