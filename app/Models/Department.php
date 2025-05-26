<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use App\Models\Staff;

class Department extends Model
{
    //
    function staffs(){
         return $this->hasMany(Staff::class, 'department_id');
    }
}
