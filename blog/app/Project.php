<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use blog\app;
class Project extends Model
{
    public function task()
    {
         return $this->hasMany('App\Task');
    }

    public function employee()
    {
         return $this->belongsToMany('App\Employee', 'employee_project', 'employee_id', 'project_id');
    }
}
