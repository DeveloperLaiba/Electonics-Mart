<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request){
        $contact = new Contact();
        $contact->name= $request->name;
        $contact->email= $request->email;
        $contact->subject= $request->subject;
        $contact->website= $request->website;
        $contact->message= $request->message;
        $contact->save();
        return redirect()->back()->with("success","We got your details.We will contact you soon");
     }
     public function Table()
     {
         $contact = Contact::all();
         return view('Contact.Table', compact('contact'));
     }
     public function edit($id)
     {
         $contact = Contact::find($id);
         return view('Contact.Edit', compact('contact'));
     }
     public function update(Request $request, $id)
     {
         $contact = Contact::find($id);
         $contact->name= $request->name;
        $contact->email= $request->email;
        $contact->subject= $request->subject;
        $contact->website= $request->website;
        $contact->message= $request->message;
         $contact->update();
         return redirect()->route('table.Contact');
     }
     public function delete($id)
     {
         $contact = Contact::find($id);
         $contact->delete();
         return redirect()->route('table.Contact');
     }
 }
 
 
 