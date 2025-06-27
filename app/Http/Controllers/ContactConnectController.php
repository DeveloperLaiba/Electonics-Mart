<?php

namespace App\Http\Controllers;

use App\Models\ContactConnect;
use Illuminate\Http\Request;

class ContactConnectController extends Controller
{
    public function create()
    {
        return view('ContactConnect.Form');
    }
    public function store(Request $request)
    {
        $contactconnect = new ContactConnect();
        $contactconnect->heading = $request->heading;
        $contactconnect->text1 = $request->text1;
        $contactconnect->text2 = $request->text2;
        $contactconnect->button = $request->button;
        $contactconnect->save();
        return redirect()->route('table.ContactConnect');
    }
    public function Table(){
        $contactconnect = ContactConnect::all();
        return view('ContactConnect.Table',compact('contactconnect'));
    }
    public function edit($id){
        $contactconnect= ContactConnect::find($id);
        return view('ContactConnect.Edit',compact('contactconnect'));
     }
     public function update(Request $request,$id){
        $contactconnect =ContactConnect::find($id);
        $contactconnect->heading = $request->heading;
        $contactconnect->text1 = $request->text1;
        $contactconnect->text2 = $request->text2;
        $contactconnect->button = $request->button;
        $contactconnect->update();
        return redirect()->route('table.ContactConnect');
     }
     public function delete($id){
        $contactconnect =ContactConnect::find($id);
        $contactconnect->delete();
        return redirect()->route('table.ContactConnect');
     }
}





