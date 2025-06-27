<?php

namespace App\Http\Controllers;

use App\Models\WeWork;
use Illuminate\Http\Request;

class WeWorkController extends Controller
{
    public function create()
    {
        return view('WeWork.Form');
    }
    public function store(Request $request)
    {
        $wework = new WeWork();
        $wework->heading1 = $request->heading1;
        $wework->heading2 = $request->heading2;
        $wework->paragraph = $request->paragraph;
        $wework->button = $request->button;
        $wework->save();
        return redirect()->route('table.WeWork');
    }
    public function Table(){
        $wework = WeWork::all();
        return view('WeWork.Table',compact('wework'));
    }
    public function edit($id){
        $wework= WeWork::find($id);
        return view('WeWork.Edit',compact('wework'));
     }
     public function update(Request $request,$id){
        $wework = WeWork::find($id);
        $wework->heading1 = $request->heading1;
        $wework->heading2 = $request->heading2;
        $wework->paragraph = $request->paragraph;
        $wework->button = $request->button;
        $wework->update();
        return redirect()->route('table.WeWork');
     }
     public function delete($id){
        $wework = WeWork::find($id);
        $wework->delete();
        return redirect()->route('table.WeWork');
     }
}


