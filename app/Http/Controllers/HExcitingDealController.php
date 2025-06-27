<?php

namespace App\Http\Controllers;

use App\Models\HExcitingDeal;
use Illuminate\Http\Request;

class HExcitingDealController extends Controller
{
    public function create()
    {
        return view('HExcitingDeal.Form');
    }
    public function store(Request $request)
    {
        $excitingdeal = new HExcitingDeal();
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $excitingdeal->image = $imageName;
        }
        $excitingdeal->heading = $request->heading;
        $excitingdeal->offer = $request->offer;
        $excitingdeal->save();
        return redirect()->route('table.HExcitingDeal');
    }
    public function Table(){
        $excitingdeal = HExcitingDeal::all();
        return view('HExcitingDeal.Table',compact('excitingdeal'));
    }
    public function edit($id){
        $excitingdeal= HExcitingDeal::find($id);
        return view('HExcitingDeal.Edit',compact('excitingdeal'));
     }
     public function update(Request $request,$id){
        $excitingdeal = HExcitingDeal::find($id);
        $image = $request->file('image');
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $imageName);
            $excitingdeal->image = $imageName;
        }
        $excitingdeal->heading = $request->heading;
        $excitingdeal->offer = $request->offer;
        $excitingdeal->update();
        return redirect()->route('table.HExcitingDeal');
     }
     public function delete($id){
        $excitingdeal = HExcitingDeal::find($id);
        $excitingdeal->delete();
        return redirect()->route('table.HExcitingDeal');
     }
}


