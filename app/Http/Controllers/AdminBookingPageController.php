<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;

class AdminBookingPageController extends Controller
{
    //
    function index(){
        $Bookings = Booking::paginate(5);
        return view('adminbookingpage',['bookings'=>$Bookings]);
    }

    function destroy($id){

        $bookingdelete = Booking::find($id);
        $bookingdelete->delete();
        return redirect('admin/admingbookingpage')->with('success','delete success');
    }
}
