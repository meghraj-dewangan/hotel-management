<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use App\Models\Room_type;
use App\Models\Room;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    //


    function index()
    {
           $userId = Auth::id();
    $bookings = Booking::where('user_id', $userId)->get();
        return view('bookingdetail',['bookings'=>$bookings]);
    }
    function create(Request $request)
    {

        $roomtypedatas = Room_type::all();
        $roomdatas = Room::all();
      

        return view('booking', [
            'roomtypedatas' => $roomtypedatas,
            'roomdatas' => $roomdatas,
            
        ]);
    }


    function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string',
            'phone' => 'required',
            'checkin' => 'required|date',
            'checkout' => 'required|date|after:checkin',
            'roomtype' => 'required',
            'room' => 'required',

        ]);

        $roomTitle = Room::find($request->room)->title;

        $conflict = Booking::where('room_number', $roomTitle)
            ->where(function ($query) use ($request) {
                $checkin = $request->checkin;
                $checkout = $request->checkout;

                $query->whereBetween('checkin', [$checkin, $checkout])
                    ->orWhereBetween('checkout', [$checkin, $checkout])
                    ->orWhere(function ($q) use ($checkin, $checkout) {
                        $q->where('checkin', '<=', $checkin)
                            ->where('checkout', '>=', $checkout);
                    });
            })->exists();

        if ($conflict) {
            return back()->with('error', 'The selected room is already booked for the selected dates.');
        }


        // Fetch the room type title by id
        $roomType = Room_type::find($request->roomtype);
        // Fetch the room title by id
        $room = Room::find($request->room);

        $booking = new Booking();
         $booking->user_name = Auth::check() ? Auth::user()->name : 'Guest';
         $booking->user_id = Auth::id();
        $booking->name = $request->name;
        $booking->email = $request->email;
        $booking->phone = $request->phone;
        $booking->guests = $request->guest;
        $booking->checkin = $request->checkin;
        $booking->checkout = $request->checkout;
        $booking->room_type = $roomType ? $roomType->title : null;
        $booking->room_number = $room ? $room->title : null;



        if ($booking->save()) {
            
            return redirect()->route('bookingindex')->with('success', 'service created successfully');
        }
        return redirect()->back()->with('error', 'Failed to booking. please try again.');
    }

    function destroy($id){
        $bookingdestroy = Booking::findOrFail($id);
         if ($bookingdestroy->user_id !== Auth::id()) {
        return redirect()->back()->with('error', 'Unauthorized action.');
    }
    $bookingdestroy->delete();
     return redirect()->route('bookingindex')->with('success', 'Booking cancel successfully.');
    }



}
