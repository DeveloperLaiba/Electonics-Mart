<?php

namespace App\Http\Controllers;

use App\Models\HSmartWatches;
use Illuminate\Http\Request;

class HSmartWatchesController extends Controller
{
    public function create()
    {
        return view('HSmartWatches.Form');
    }
    public function store(Request $request)
    {
        $smartwatches = new HSmartWatches();
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $smartwatches->image = $imageName;
        }
        $smartwatches->paragraph1 = $request->paragraph1;
        $smartwatches->heading = $request->heading;
        $smartwatches->paragraph2 = $request->paragraph2;
        $smartwatches->save();
        return redirect()->route('table.HSmartWatches');
    }
    public function Table(){
        $smartwatches = HSmartWatches::all();
        return view('HSmartWatches.Table',compact('smartwatches'));
    }
    public function edit($id){
        $smartwatches= HSmartWatches::find($id);
        return view('HSmartWatches.Edit',compact('smartwatches'));
     }
     public function update(Request $request,$id){
        $smartwatches = HSmartWatches::find($id);
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $smartwatches->image = $imageName;
        }
        $smartwatches->paragraph1 = $request->paragraph1;
        $smartwatches->heading = $request->heading;
        $smartwatches->paragraph2 = $request->paragraph2;
        $smartwatches->update();
        return redirect()->route('table.HSmartWatches');
     }
     public function delete($id){
        $smartwatches = HSmartWatches::find($id);
        $smartwatches->delete();
        return redirect()->route('table.HSmartWatches');
     }
}



