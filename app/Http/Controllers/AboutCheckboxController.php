<?php

namespace App\Http\Controllers;

use App\Models\AboutCheckbox;
use Illuminate\Http\Request;

class AboutCheckboxController extends Controller
{
    public function create()
    {
        return view('AboutCheckbox.Form');
    }
    public function store(Request $request)
    {
        $aboutcheckbox = new AboutCheckbox();
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $aboutcheckbox->image = $imageName;
        }
        $aboutcheckbox->paragraph = $request->paragraph;
        $aboutcheckbox->save();
        return redirect()->route('table.AboutCheckbox');
    }
    public function Table(){
        $aboutcheckbox = AboutCheckbox::all();
        return view('AboutCheckbox.Table',compact('aboutcheckbox'));
    }
    public function edit($id){
        $aboutcheckbox= AboutCheckbox::find($id);
        return view('AboutCheckbox.Edit',compact('aboutcheckbox'));
     }
     public function update(Request $request,$id){
        $aboutcheckbox = AboutCheckbox::find($id);
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $aboutcheckbox->image = $imageName;
        }
        $aboutcheckbox->paragraph = $request->paragraph;
        $aboutcheckbox->update();
        return redirect()->route('table.AboutCheckbox');
     }
     public function delete($id){
        $aboutcheckbox = AboutCheckbox::find($id);
        $aboutcheckbox->delete();
        return redirect()->route('table.AboutCheckbox');
     }
  
}



