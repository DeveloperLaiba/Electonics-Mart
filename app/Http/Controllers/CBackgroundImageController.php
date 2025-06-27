<?php

namespace App\Http\Controllers;

use App\Models\CBackgroundImage;
use Illuminate\Http\Request;

class CBackgroundImageController extends Controller
{
    public function create()
    {
        return view('CBackgroundImage.Form');
    }
    public function store(Request $request)
    {
        $cbackgroundimage = new CBackgroundImage();
        $cbackgroundimage->paragraph1 = $request->paragraph1;
        $cbackgroundimage->boldtext = $request->boldtext;
        $cbackgroundimage->paragraph2 = $request->paragraph2;
        $cbackgroundimage->button = $request->button;
        $cbackgroundimage->text = $request->text;
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $cbackgroundimage->image = $imageName;
        }
        $cbackgroundimage->save();
        return redirect()->route('table.CBackgroundImage');
    }
    public function Table(){
        $cbackgroundimage = CBackgroundImage::all();
        return view('CBackgroundImage.Table',compact('cbackgroundimage'));
    }
    public function edit($id){
        $cbackgroundimage= CBackgroundImage::find($id);
        return view('CBackgroundImage.Edit',compact('cbackgroundimage'));
     }
     public function update(Request $request,$id){
        $cbackgroundimage = CBackgroundImage::find($id);
        $cbackgroundimage->paragraph1 = $request->paragraph1;
        $cbackgroundimage->boldtext = $request->boldtext;
        $cbackgroundimage->paragraph2 = $request->paragraph2;
        $cbackgroundimage->button = $request->button;
        $cbackgroundimage->text = $request->text;
        $image =$request->file('image');
        if($image) {
         $imageName = time() . '.' . $image->getClientOriginalExtension();
         $image->move('image', $imageName);
         $cbackgroundimage->image = $imageName;
        }
        $cbackgroundimage->update();
        return redirect()->route('table.CBackgroundImage');
     }
     public function delete($id){
        $cbackgroundimage = CBackgroundImage::find($id);
        $cbackgroundimage->delete();
        return redirect()->route('table.CBackgroundImage');
     }
}

