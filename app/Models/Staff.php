<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

 use App\Models\Department;

class Staff extends Model
{
    
      function department()
{
    return $this->belongsTo(Department::class);
}
}
