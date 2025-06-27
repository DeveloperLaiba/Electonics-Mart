<?php

namespace App\Http\Controllers;

use App\Models\ContactCompany;
use Illuminate\Http\Request;

class ContactCompanyController extends Controller
{
   
    public function create()
    {
        return view('ContactCompany.Form');
    }
    public function store(Request $request)
    {
        $contactcompany = new ContactCompany();
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $contactcompany->image = $imageName;
        }
        $contactcompany->name = $request->name;
        $contactcompany->address = $request->address;
        $contactcompany->save();
        return redirect()->route('table.ContactCompany');
    }
    public function Table(){
        $contactcompany = ContactCompany::all();
        return view('ContactCompany.Table',compact('contactcompany'));
    }
    public function edit($id){
        $contactcompany= ContactCompany::find($id);
        return view('ContactCompany.Edit',compact('contactcompany'));
     }
     public function update(Request $request,$id){
        $contactcompany = ContactCompany::find($id);
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $contactcompany->image = $imageName;
        }
        $contactcompany->name = $request->name;
        $contactcompany->address = $request->address;
        $contactcompany->update();
        return redirect()->route('table.ContactCompany');
     }
     public function delete($id){
        $contactcompany = ContactCompany::find($id);
        $contactcompany->delete();
        return redirect()->route('table.ContactCompany');
     }
}




