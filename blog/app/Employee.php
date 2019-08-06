<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use blog\app;

class Employee extends Model
{
    public function task()
    {
         return $this->hasMany('App\Task');
    }

    public function project()
    {
         return $this->belongsToMany('App\Project', 'employee_project', 'employee_id', 'project_id')->withpivot('created_at');
    }
}
