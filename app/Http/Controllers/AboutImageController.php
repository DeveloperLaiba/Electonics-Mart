<?php

namespace App\Http\Controllers;

use App\Models\AboutImage;
use Illuminate\Http\Request;

class AboutImageController extends Controller
{
    public function create()
    {
        return view('AboutImage.Form');
    }
    public function store(Request $request)
    {
        $aboutimage = new AboutImage();
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $aboutimage->image = $imageName;
        }
        $aboutimage->save();
        return redirect()->route('table.AboutImage');
    }
    public function Table(){
        $aboutimage = AboutImage::all();
        return view('AboutImage.Table',compact('aboutimage'));
    }
    public function edit($id){
        $aboutimage= AboutImage::find($id);
        return view('AboutImage.Edit',compact('aboutimage'));
     }
     public function update(Request $request,$id){
        $aboutimage = AboutImage::find($id);
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $aboutimage->image = $imageName;
        }
        $aboutimage->update();
        return redirect()->route('table.AboutImage');
     }
     public function delete($id){
        $aboutimage = AboutImage::find($id);
        $aboutimage->delete();
        return redirect()->route('table.AboutImage');
     }
}


