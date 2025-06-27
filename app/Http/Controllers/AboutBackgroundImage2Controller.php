<?php

namespace App\Http\Controllers;

use App\Models\AboutBackgroundImage2;
use Illuminate\Http\Request;

class AboutBackgroundImage2Controller extends Controller
{
    public function create()
    {
        return view('AboutBackgroundImage2.Form');
    }
    public function store(Request $request)
    {
        $aboutbackgroundimage2 = new AboutBackgroundImage2();
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $aboutbackgroundimage2->image = $imageName;
        }
        $aboutbackgroundimage2->save();
        return redirect()->route('table.AboutBackgroundImage2');
    }
    public function Table(){
        $aboutbackgroundimage2 = AboutBackgroundImage2::all();
        return view('AboutBackgroundImage2.Table',compact('aboutbackgroundimage2'));
    }
    public function edit($id){
        $aboutbackgroundimage2= AboutBackgroundImage2::find($id);
        return view('AboutbackgroundImage2.Edit',compact('aboutbackgroundimage2'));
     }
     public function update(Request $request,$id){
        $aboutbackgroundimage2 = AboutBackgroundImage2::find($id);
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $aboutbackgroundimage2->image = $imageName;
        }
        $aboutbackgroundimage2->update();
        return redirect()->route('table.AboutBackgroundImage2');
     }
     public function delete($id){
        $aboutbackgroundimage2 = AboutBackgroundImage2::find($id);
        $aboutbackgroundimage2->delete();
        return redirect()->route('table.AboutBackgroundImage2');
     }
}




