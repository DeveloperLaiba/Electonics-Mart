<?php

namespace App\Http\Controllers;

use App\Models\AboutBackgroundImage;
use Illuminate\Http\Request;

class AboutBackgroundImageController extends Controller
{
    public function create()
    {
        return view('AboutBackgroundImage.Form');
    }
    public function store(Request $request)
    {
        $aboutbackgroundimage = new AboutBackgroundImage();
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $aboutbackgroundimage->image = $imageName;
        }
        $aboutbackgroundimage->paragraph1 = $request->paragraph1;
        $aboutbackgroundimage->paragraph2 = $request->paragraph2;
        $aboutbackgroundimage->paragraph3 = $request->paragraph3;
        $aboutbackgroundimage->paragraph4 = $request->paragraph4;
        $aboutbackgroundimage->save();
        return redirect()->route('table.AboutBackgroundImage');
    }
    public function Table(){
        $aboutbackgroundimage = AboutBackgroundImage::all();
        return view('AboutBackgroundImage.Table',compact('aboutbackgroundimage'));
    }
    public function edit($id){
        $aboutbackgroundimage= AboutBackgroundImage::find($id);
        return view('AboutbackgroundImage.Edit',compact('aboutbackgroundimage'));
     }
     public function update(Request $request,$id){
        $aboutbackgroundimage = AboutBackgroundImage::find($id);
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $aboutbackgroundimage->image = $imageName;
        }
        $aboutbackgroundimage->paragraph1 = $request->paragraph1;
        $aboutbackgroundimage->paragraph2 = $request->paragraph2;
        $aboutbackgroundimage->paragraph3 = $request->paragraph3;
        $aboutbackgroundimage->paragraph4 = $request->paragraph4;
        $aboutbackgroundimage->update();
        return redirect()->route('table.AboutBackgroundImage');
     }
     public function delete($id){
        $aboutbackgroundimage = AboutBackgroundImage::find($id);
        $aboutbackgroundimage->delete();
        return redirect()->route('table.AboutBackgroundImage');
     }
}



