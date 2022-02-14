<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\welcomeimg;

use Illuminate\Http\Request;

class welcomeimgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $welcomes = welcomeimg::latest()->get();
        return view('welcome.index', compact('welcomes'));
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $welcomes = welcomeimg::find($id);
        return view('welcome.edit',compact('welcomes'));
    }

    
    public function update($id, Request $request)
    {
       
        $welcomes = welcomeimg::find($id);

        if ($image = $request->file('image')) {
             $destinationPath = 'public/welcome/image/';
             $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
             $image->move($destinationPath, $profileImage);
             $welcomes->image =$profileImage;

             $welcomes->update([

            ]);
            Alert::success('Successfully updated!');
        return redirect()->route('welcome.index');
        // return redirect()->route('welcome.index')->with($notification);
        }
        else {
            // $notification = array('messege' => 'not updated !', 'alert-type' => 'error');
            alert()->error('Error', ' not updated!');
            return redirect()->back();
        // return redirect()->route('welcome.index')->with($notification);

        }
    }

   
    public function destroy($id)
    {
        //
    }
}
