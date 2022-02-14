<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\service;

use Illuminate\Http\Request;

class serviceController extends Controller
{
   
    public function index()
    {
        $services = service::latest()->get();
        return view('service.index', compact('services'));
    }

    
    public function create()
    {
        return view('service.create');

    }

   
    public function store(Request $request)
    {
        $request->validate([
     
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'header'=>'required',
            'details'=>'',
        ]);
       $services = new  service;
        
       $services->header=$request->header;
       $services->details=$request->details;

        if ($image = $request->file('image')) {
             $destinationPath = 'public/service/image/';
             $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $services->image =$profileImage  ;

            $services->save();

            Alert::success('Successfully created!');
           return redirect()->route('service.index');            

         } else {

            alert()->error('Error', ' not created!');
            return redirect()->back();
         }
    }

   
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $services = service::find($id);
        return view('service.edit',compact('services'));
    }

    
    public function update( $id, Request $request)
    {
       
        $services = service::find($id);

        $header = request('header');
        $details = request('details');
       

        if ($image = $request->file('image')) {
             $destinationPath = 'public/service/image/';
             $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
             $image->move($destinationPath, $profileImage);
             $services->image =$profileImage;

             $services->update([

            'header'=>$header,
            'details'=>$details,

            ]);
            Alert::success('Successfully updated!');
            return redirect()->route('service.index');
        }
        else {
            alert()->error('Error', ' not updated!');
             return redirect()->back();

        }
    }

    
    public function destroy($id)
    {
        //
    }
}
