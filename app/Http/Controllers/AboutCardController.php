<?php

namespace App\Http\Controllers;

use App\Models\AboutCard;
use Illuminate\Http\Request;

class AboutCardController extends Controller
{
    public function create()
    {
        return view('AboutCard.Form');
    }
    public function store(Request $request)
    {
        $aboutcard = new AboutCard();
        $aboutcard->paragraph = $request->paragraph;
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $aboutcard->image = $imageName;
        }
        $aboutcard->name = $request->name;
        $aboutcard->description = $request->description;
        $aboutcard->save();
        return redirect()->route('table.AboutCard');
    }
    public function Table(){
        $aboutcard = AboutCard::all();
        return view('AboutCard.Table',compact('aboutcard'));
    }
    public function edit($id){
        $aboutcard= AboutCard::find($id);
        return view('AboutCard.Edit',compact('aboutcard'));
     }
     public function update(Request $request,$id){
        $aboutcard = AboutCard::find($id);
        $aboutcard->paragraph = $request->paragraph;
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $aboutcard->image = $imageName;
        }
        $aboutcard->name = $request->name;
        $aboutcard->description = $request->description;
        $aboutcard->update();
        return redirect()->route('table.AboutCard');
     }
     public function delete($id){
        $aboutcard = AboutCard::find($id);
        $aboutcard->delete();
        return redirect()->route('table.AboutCard');
     }
}



