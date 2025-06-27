<?php

namespace App\Http\Controllers;

use App\Models\HBackgroundImage;
use Illuminate\Http\Request;

class HBackgroundImageController extends Controller
{
    public function create()
    {
        return view('HBackgroundImage.Form');
    }
    public function store(Request $request)
    {
        $hbackgroundimage = new HBackgroundImage();
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $hbackgroundimage->image = $imageName;
        }
        $hbackgroundimage->save();
        return redirect()->route('table.HBackgroundImage');
    }
    public function Table(){
        $hbackgroundimage = HBackgroundImage::all();
        return view('HBackgroundImage.Table',compact('hbackgroundimage'));
    }
    public function edit($id){
        $hbackgroundimage= HBackgroundImage::find($id);
        return view('HBackgroundImage.Edit',compact('hbackgroundimage'));
     }
     public function update(Request $request,$id){
        $hbackgroundimage = HBackgroundImage::find($id);
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $hbackgroundimage->image = $imageName;
        }
        $hbackgroundimage->update();
        return redirect()->route('table.HBackgroundImage');
     }
     public function delete($id){
        $hbackgroundimage = HBackgroundImage::find($id);
        $hbackgroundimage->delete();
        return redirect()->route('table.HBackgroundImage');
     }
}


