<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    //
    function create(){

return view("contactus");
    }


    function index(){
        $queries = ContactUs::paginate(10);
        return view('queries',['queries'=>$queries]);
    }
    function store(Request $request){

        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'message'=>'required|string|max:255',
        ]);

        $contactusreq = new ContactUs();
        $contactusreq->name = $request->name;
        $contactusreq->email = $request->email;
        $contactusreq->query = $request->message;

        if($contactusreq->save()){
            return redirect('contactpage')->with('success','Message received. We will respond as soon as possible.');
        }
        return back()->with('error','error in message send');

    }

    function destroy($id){
      $contactusdelete=   ContactUs::findOrFail($id);
        
         if (!$contactusdelete) {
            return redirect('admin/contactpagequeries')->with('error', "error in delete");
        }

        $contactusdelete->delete();
        return redirect('admin/contactpagequeries')->with('success','successfully deleted');
    }
   
}
