<?php

namespace Edgar\PlanManager;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['name'];

    protected $dates = ['created_at'];

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}
