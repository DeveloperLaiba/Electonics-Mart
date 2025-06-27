<?php

namespace App\Http\Controllers;

use App\Models\ContactMap;
use Illuminate\Http\Request;

class ContactMapController extends Controller
{
    public function create()
    {
        return view('ContactMap.Form');
    }
    public function store(Request $request)
    {
        $contactmap = new ContactMap();
        $contactmap->text1 = $request->text1;
        $contactmap->text2 = $request->text2;
        $contactmap->save();
        return redirect()->route('table.ContactMap');
    }
    public function Table(){
        $contactmap = ContactMap::all();
        return view('ContactMap.Table',compact('contactmap'));
    }
    public function edit($id){
        $contactmap= ContactMap::find($id);
        return view('ContactMap.Edit',compact('contactmap'));
     }
     public function update(Request $request,$id){
        $contactmap =ContactMap::find($id);
        $contactmap->text1 = $request->text1;
        $contactmap->text2 = $request->text2;
        $contactmap->update();
        return redirect()->route('table.ContactMap');
     }
     public function delete($id){
        $contactmap =ContactMap::find($id);
        $contactmap->delete();
        return redirect()->route('table.ContactMap');
     }
}







