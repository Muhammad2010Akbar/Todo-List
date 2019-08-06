<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use blog\app;
class Task extends Model
{
    public function employee()
    {
         return $this->belongsTo('App\Employee');
    }

    public function project()
    {
         return $this->belongsTo('App\Project');
    }
}
