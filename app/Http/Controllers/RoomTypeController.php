<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Room_type;

class RoomTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
      

        $data = Room_type::paginate(5); 
        // return response()->json($data, 200);
         return view("roomtypes.roomtypes",["roomtypedata"=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("roomtypes.roomtypecreate");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
        'title' => 'required|string|max:255',
        'detail' => 'required|string',
        'image'=>'required',
        'image.*' => 'image',
    ]);

    $imgPath = [];
    if ($request->hasFile('image')) {
        foreach ($request->file('image') as $image) {
            $imagePath = $image->store('image', 'public'); 
            $filename = basename($imagePath);
            $imgPath[] = $filename; 
        }
    }

    $imageJson = json_encode($imgPath);
    //store data in database

    $roomtype = new Room_type();
    $roomtype->title = $request->title;
    $roomtype->detail = $request->detail;
    $roomtype->category_image =  $imageJson;
    $roomtype->save();
   

    if ($roomtype->save()) {
       
        return redirect()->route('roomtypes.index')
            ->with('success', 'Room type created successfully!');
    }  
    return redirect()->back()
    ->with('error', 'Failed to create room type. Please try again.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
       // Fetch room type with its related rooms
    $roomtype = Room_type::find($id);

    if (!$roomtype) {
        return redirect()->route('roomtypes.index')->with('error', 'Room type not found.');
    }

    // Assuming  a relation in Room model (roomType), now fetch rooms
    $rooms = $roomtype->rooms()->paginate(10); 

    return view('roomtypes.categoriseroom', [
        'roomtype' => $roomtype,
         'rooms' => $rooms
    ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $roomtype = Room_type::find($id);

        if(!$roomtype){
            return redirect()->route('roomtypes.index')->with('error','roomtype not found');
        }
        return view('roomtypes.editform',['editdata'=>$roomtype]);


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $request->validate([
            'title'=>'required|string|max:255',
            'detail'=>'required|string',
            'image.*'=>'image',

        ]);

        $roomtype = Room_type::find($id);

        if (!$roomtype) {
            return redirect()->route('roomtypes.index')->with('error', 'Room type not found.');
        }

        $imgPath = json_decode($roomtype->category_image,true);

        if($request->hasFile('image')){

            foreach($request->file('image')as $image){
                $imagePath = $image->store('image','public');
                $fileName = basename($imagePath);
                $imgPath[] = $fileName;
            }
        }

        $roomtype->title = $request->title;
        $roomtype->detail = $request->detail;
        $roomtype->category_image = json_encode($imgPath);

        if($roomtype->save()){
            return redirect()->route('roomtypes.index')->with('success', 'Room type updated successfully!');
        }
        return redirect()->back()->with('error','Failed to update room type.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $roomtype = Room_type::find($id);
        if(!$roomtype){
            return redirect()->route('roomtypes.index')->with('error',"error in delete");
        }

        $images = json_decode($roomtype->category_image,true);

        if ($images && is_array($images)) {
            foreach($images as $image){
                $imagePath = public_path("storage/image/{$image}");
                if (file_exists($imagePath)) {
                    unlink($imagePath);  // Delete the image file
                }
            }
        }
        $roomtype->delete();
        return redirect()->route("roomtypes.index")->with("success","delete sucess");



    }
}
