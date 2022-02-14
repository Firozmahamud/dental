<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;

use App\Models\contactus;

use Illuminate\Http\Request;

class contactusController extends Controller
{
   
    public function index()
    {
        $contactus = contactus:: latest()->get();

        return view('admin.contactus', compact('contactus'));
    }

    
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
           'name' => 'required',
           'email'=>'required',
           'message'=>'',

            
            
        ]);
     
        $contactus = new contactus;

        
        $contactus->name=$request->name;
        $contactus->email=$request->email;
        $contactus->message=$request->message;

        $contactus->save();

        Alert::success('Successfully send!');
            return redirect()->route('contactus');

       
    }

   
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
