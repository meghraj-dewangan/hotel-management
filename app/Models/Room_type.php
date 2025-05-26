<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use App\Models\Room;
class Room_type extends Model
{
    //

     function rooms()
{
    return $this->hasMany(Room::class, 'room_type_id');
}
}
