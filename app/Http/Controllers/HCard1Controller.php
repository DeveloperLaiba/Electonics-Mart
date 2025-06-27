<?php

namespace App\Http\Controllers;

use App\Models\HCard1;
use Illuminate\Http\Request;

class HCard1Controller extends Controller
{
    public function create()
    {
        return view('HCard1.Form');
    }
    public function store(Request $request)
    {
        $card1 = new HCard1();
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $card1->image = $imageName;
        }
        $card1->text = $request->text;
        $card1->name = $request->name;
        $card1->price = $request->price;
        $card1->price2 = $request->price2;
        $card1->button = $request->button;
        $card1->save();
        return redirect()->route('table.HCard1');
    }
    public function Table(){
        $card1 = HCard1::all();
        return view('HCard1.Table',compact('card1'));
    }
    public function edit($id){
        $card1= HCard1::find($id);
        return view('HCard1.Edit',compact('card1'));
     }
     public function update(Request $request,$id){
        $card1 = HCard1::find($id);
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $card1->image = $imageName;
        }
        $card1->text = $request->text;
        $card1->name = $request->name;
        $card1->price = $request->price;
        $card1->price2 = $request->price2;
        $card1->button = $request->button;
        $card1->update();
        return redirect()->route('table.HCard1');
     }
     public function delete($id){
        $card1 = HCard1::find($id);
        $card1->delete();
        return redirect()->route('table.HCard1');
     }
}

