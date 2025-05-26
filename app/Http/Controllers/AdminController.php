<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Staff;
use App\Models\Booking;

class AdminController extends Controller
{
    //

    function admingpage(){
        $staffs = Staff::get(); 
        $bookings = Booking::get();

        return view("admin",['staffs'=>$staffs,'bookings'=>$bookings]);
    }
}
