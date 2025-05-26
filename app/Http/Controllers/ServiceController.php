<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    //

    function index()
    {
        $data = Service::all();

        return view('services.services', ["servicedatas" => $data]);
    }

    function create()
    {
        return view('services.servicecreate');
    }

    function store(Request $request)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'detail' => 'required|string',
            'image' => 'required',

        ]);

        $imageName = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('image', 'public');
            $imageName = basename($imagePath);
        }

        $service = new Service();
        $service->title = $request->title;
        $service->detail = $request->detail;
        $service->service_image = $imageName;


        if ($service->save()) {
            return redirect('admin/services')->with('success', 'service created successfully');
        }
        return redirect()->back()->with('error', 'Failed to create services. please try again.');
    }


    function edit($id)
    {
        $servicefind = Service::find($id);

        return view('services.serviceedit', ['serviceedit' => $servicefind]);
    }

    function update(Request $request, $id)
    {



        $findservice = Service::find($id);

        if (!$findservice) {
            return redirect('admin/services')->with('error', 'service not found.');
        }


        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('image', 'public');
            $findservice->service_image = basename($imagePath);
        }
        $findservice->title = $request->title;
        $findservice->detail = $request->detail;

    if ($findservice->save()) {
        return redirect('admin/services')->with('success', 'Service updated successfully!');
    }

        return redirect()->back()->with('error', 'Failed to update service.');
    }

    function destroy($id)
    {
        $servicefind = Service::find($id);

        $servicefind->delete();
        return redirect('admin/services')->with("success", "delete sucess");
    }


}
