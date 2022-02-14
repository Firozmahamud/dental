<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Banner;

use Illuminate\Http\Request;

class bannerController extends Controller
{
    public function index()
    {
        $banners = Banner::latest()->get();
        return view('banner.index', compact('banners'));
    }

    public function create()
    {
        return view('banner.create');
        
    }

    
    public function store(Request $request)
    {
        $request->validate([
     
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'header'=>'required',
            'details'=>'',
            'learnmore'=>'',
            'booknow'=>'',

            
            
        ]);
     
       // $doctors = new doctor;
       $banners = new  Banner;
       

        
       $banners->header=$request->header;
       $banners->details=$request->details;
       $banners->learnmore=$request->learnmore;
       $banners->booknow=$request->booknow;


        if ($image = $request->file('image')) {
             $destinationPath = 'public/banner/image/';
             $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $banners->image =$profileImage  ;

            $banners->save();

            Alert::success('Successfully created!');
            return redirect()->route('contact.index');

            // $notification = array('messege' => 'Successfully saved!', 'alert-type' => 'success');
            // return redirect()->route('contact.index')->with($notification);
            //  return redirect()->back()->with($notification);

         } else {

            alert()->error('Error', ' not created!');
            return redirect()->back();

            //  $notification = array('messege' => ' not Saved !', 'alert-type' => 'error');
            //  return redirect()->back()->with($notification);
         }

    }

   
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $banners = Banner::find($id);
        return view('banner.edit',compact('banners'));

        
    }

    
    public function update( $id, Request $request)
    {
        
        $banners = Banner::find($id);

        $header = request('header');
        $details = request('details');
        $learnmore = request('learnmore');
        $booknow = request('booknow');

        if ($image = $request->file('image')) {
             $destinationPath = 'public/banner/image/';
             $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
             $image->move($destinationPath, $profileImage);
             $banners->image =$profileImage;

             $banners->update([

            'header'=>$header,
            'details'=>$details,
            'learnmore'=>$learnmore,
            'booknow'=>$booknow,

            ]);


            Alert::success('Successfully updated!');
            return redirect()->route('banner.index');

        //     $notification = array('messege' => 'Successfully updated!', 'alert-type' => 'success');
        // return redirect()->route('banner.index')->with($notification);
        }
        else {


            alert()->error('Error', ' not updated!');
            return redirect()->back();


            // $notification = array('messege' => 'not updated !', 'alert-type' => 'error');
            // return redirect()->back()->with($notification);
        }
    }

   
    public function destroy($id)
    {
        //
    }
}
