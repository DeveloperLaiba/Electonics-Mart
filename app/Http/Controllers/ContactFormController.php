<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function create()
    {
        return view('ContactForm.Form');
    }
    public function store(Request $request)
    {
        $contactform = new ContactForm();
        $contactform->text1 = $request->text1;
        $contactform->text2 = $request->text2;
        $contactform->save();
        return redirect()->route('table.ContactForm');
    }
    public function Table(){
        $contactform = ContactForm::all();
        return view('ContactForm.Table',compact('contactform'));
    }
    public function edit($id){
        $contactform= ContactForm::find($id);
        return view('ContactForm.Edit',compact('contactform'));
     }
     public function update(Request $request,$id){
        $contactform =ContactForm::find($id);
        $contactform->text1 = $request->text1;
        $contactform->text2 = $request->text2;
        $contactform->update();
        return redirect()->route('table.ContactForm');
     }
     public function delete($id){
        $contactform =ContactForm::find($id);
        $contactform->delete();
        return redirect()->route('table.ContactForm');
     }
}






