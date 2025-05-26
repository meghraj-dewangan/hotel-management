<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Room_type;

class HomeController extends Controller
{
    //
    function homeController(){
        $getservice = Service::all();
        $getroomtypes = Room_type::all();

         foreach($getroomtypes as $room){
        $room->category_image = json_decode($room->category_image, true);
    }
        return view('home',['servicedata'=>$getservice,'roomtypesdata'=>$getroomtypes]);
    }
}
