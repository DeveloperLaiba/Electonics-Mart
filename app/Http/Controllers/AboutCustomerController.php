<?php

namespace App\Http\Controllers;

use App\Models\AboutCustomer;
use Illuminate\Http\Request;

class AboutCustomerController extends Controller
{
    public function create()
    {
        return view('AboutCustomer.Form');
    }
    public function store(Request $request)
    {
        $aboutcustomer = new AboutCustomer();
        $aboutcustomer->heading1 = $request->heading1;
        $aboutcustomer->heading2 = $request->heading2;
        $aboutcustomer->heading3 = $request->heading3;
        $aboutcustomer->paragraph1 = $request->paragraph1;
        $aboutcustomer->paragraph2 = $request->paragraph2;
        $aboutcustomer->save();
        return redirect()->route('table.AboutCustomer');
    }
    public function Table(){
        $aboutcustomer = AboutCustomer::all();
        return view('AboutCustomer.Table',compact('aboutcustomer'));
    }
    public function edit($id){
        $aboutcustomer= AboutCustomer::find($id);
        return view('AboutCustomer.Edit',compact('aboutcustomer'));
     }
     public function update(Request $request,$id){
        $aboutcustomer =AboutCustomer::find($id);
        $aboutcustomer->heading1 = $request->heading1;
        $aboutcustomer->heading2 = $request->heading2;
        $aboutcustomer->heading3 = $request->heading3;
        $aboutcustomer->paragraph1 = $request->paragraph1;
        $aboutcustomer->paragraph2 = $request->paragraph2;
        $aboutcustomer->update();
        return redirect()->route('table.AboutCustomer');
     }
     public function delete($id){
        $aboutcustomer =AboutCustomer::find($id);
        $aboutcustomer->delete();
        return redirect()->route('table.AboutCustomer');
     }
}




