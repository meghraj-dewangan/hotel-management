<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    //

    //showing rooms

    function index()
    {


        $allRooms = Room::with('roomType')->paginate(10);

        return view('rooms.rooms', ['roomsdata' => $allRooms]);

    }

    //create rooms

    function create()
    {
        $roomTypes = \App\Models\Room_type::all();
        return view("rooms.roomcreate", ['roomtypesdata' => $roomTypes]);
    }


    // storing in database
    function store(Request $request)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'room_category' => 'required|string',

        ]);

        $addroom = new Room();
        $addroom->title = $request->title;
        $addroom->room_type_id = $request->room_category;


        if ($addroom->save()) {

            return redirect('admin/roomsview')
                ->with('success', 'Room created successfully!');
        }
        return redirect()->back()
            ->with('error', 'Failed to create room. Please try again.');



    }


    function edit($id)
    {
        $roomedit = Room::find($id);

        if (!$roomedit) {
            return redirect('admin/roomsview')->with('error', 'room not found');
        }

        return view('rooms.roomeditform', ['editdata' => $roomedit]);

    }

    function update(Request $request, $id)
    {

        $room = Room::find($id);

        if (!$room) {
            return redirect('admin/roomsview')->with('error', 'Room not found');
        }

        $room->title = $request->title;
       
       

        if ($room->save()) {
            return redirect('admin/roomsview')->with('success', 'Room updated successfully!');
        }

        return redirect()->back()->with('error', 'Failed to update room.');
    }


    // Deleting
    function destroy($id)
    {
        $roomfind = Room::find($id);

        if (!$roomfind) {
            return redirect('admin/roomsview')->with('error', "error in delete");
        }

        $roomfind->delete();
        return redirect('admin/roomsview')->with("success", "delete sucess");
    }
}
