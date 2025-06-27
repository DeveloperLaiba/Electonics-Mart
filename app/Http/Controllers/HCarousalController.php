<?php

namespace App\Http\Controllers;

use App\Models\HCarousal;
use Illuminate\Http\Request;

class HCarousalController extends Controller
{
    public function create()
    {
        return view('HCarousal.Form');
    }
    public function store(Request $request)
    {
        $carousal = new HCarousal();
        $carousal->paragraph1 = $request->paragraph1;
        $carousal->paragraph2 = $request->paragraph2;
        $carousal->paragraph3 = $request->paragraph3;
        $carousal->paragraph4 = $request->paragraph4;
        $carousal->heading = $request->heading;
        $carousal->heading2 = $request->heading2;
        $carousal->button = $request->button;
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $carousal->image = $imageName;
        }
        $carousal->save();
        return redirect()->route('table.HCarousal');
    }
    public function Table(){
        $carousal = HCarousal::all();
        return view('HCarousal.Table',compact('carousal'));
    }
    public function edit($id){
        $carousal= HCarousal::find($id);
        return view('HCarousal.Edit',compact('carousal'));
     }
     public function update(Request $request,$id){
        $carousal = HCarousal::find($id);
        $carousal->paragraph1 = $request->paragraph1;
        $carousal->paragraph2 = $request->paragraph2;
        $carousal->paragraph3 = $request->paragraph3;
        $carousal->paragraph4 = $request->paragraph4;
        $carousal->heading = $request->heading;
        $carousal->heading2 = $request->heading2;
        $carousal->button = $request->button;
        $image =$request->file('image');
        if($image) {
         $imageName = time() . '.' . $image->getClientOriginalExtension();
         $image->move('image', $imageName);
         $carousal->image = $imageName;
        }
        $carousal->update();
        return redirect()->route('table.HCarousal');
     }
     public function delete($id){
        $carousal = HCarousal::find($id);
        $carousal->delete();
        return redirect()->route('table.HCarousal');
     }
}
