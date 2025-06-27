<?php

namespace App\Http\Controllers;

use App\Models\HCard2;
use Illuminate\Http\Request;

class HCard2Controller extends Controller
{
    public function create()
    {
        return view('HCard2.Form');
    }
    public function store(Request $request)
    {
        $card2 = new HCard2();
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $card2->image = $imageName;
        }
        $card2->text = $request->text;
        $card2->name = $request->name;
        $card2->price = $request->price;
        $card2->price2 = $request->price2;
        $card2->button = $request->button;
        $card2->save();
        return redirect()->route('table.HCard2');
    }
    public function Table(){
        $card2 = HCard2::all();
        return view('HCard2.Table',compact('card2'));
    }
    public function edit($id){
        $card2= HCard2::find($id);
        return view('HCard2.Edit',compact('card2'));
     }
     public function update(Request $request,$id){
        $card2 = HCard2::find($id);
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $card2->image = $imageName;
        }
        $card2->text = $request->text;
        $card2->name = $request->name;
        $card2->price = $request->price;
        $card2->price2 = $request->price2;
        $card2->button = $request->button;
        $card2->update();
        return redirect()->route('table.HCard2');
     }
     public function delete($id){
        $card2 = HCard2::find($id);
        $card2->delete();
        return redirect()->route('table.HCard2');
     }
}


