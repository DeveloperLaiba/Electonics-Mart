<?php

namespace App\Http\Controllers;

use App\Models\ContactBackgroundImage;
use Illuminate\Http\Request;

class ContactBackgroundImageController extends Controller
{
    public function create()
    {
        return view('ContactBackgroundImage.Form');
    }
    public function store(Request $request)
    {
        $contactbackgroundimage = new ContactBackgroundImage();
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $contactbackgroundimage->image = $imageName;
        }
        $contactbackgroundimage->paragraph1 = $request->paragraph1;
        $contactbackgroundimage->paragraph2 = $request->paragraph2;
        $contactbackgroundimage->paragraph3 = $request->paragraph3;
        $contactbackgroundimage->paragraph4 = $request->paragraph4;
        $contactbackgroundimage->save();
        return redirect()->route('table.ContactBackgroundImage');
    }
    public function Table(){
        $contactbackgroundimage = ContactBackgroundImage::all();
        return view('ContactBackgroundImage.Table',compact('contactbackgroundimage'));
    }
    public function edit($id){
        $contactbackgroundimage= ContactBackgroundImage::find($id);
        return view('ContactbackgroundImage.Edit',compact('contactbackgroundimage'));
     }
     public function update(Request $request,$id){
        $contactbackgroundimage = ContactBackgroundImage::find($id);
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $contactbackgroundimage->image = $imageName;
        }
        $contactbackgroundimage->paragraph1 = $request->paragraph1;
        $contactbackgroundimage->paragraph2 = $request->paragraph2;
        $contactbackgroundimage->paragraph3 = $request->paragraph3;
        $contactbackgroundimage->paragraph4 = $request->paragraph4;
        $contactbackgroundimage->update();
        return redirect()->route('table.ContactBackgroundImage');
     }
     public function delete($id){
        $contactbackgroundimage = ContactBackgroundImage::find($id);
        $contactbackgroundimage->delete();
        return redirect()->route('table.ContactBackgroundImage');
     }
}



