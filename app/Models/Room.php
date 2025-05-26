<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Room_type;

class Room extends Model
{
    //

    function roomType(){
        return $this->belongsTo(Room_type::class,'room_type_id');
    }
}
