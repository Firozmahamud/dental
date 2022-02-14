<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\welcomecontent;


use Illuminate\Http\Request;

class welcomecontentController extends Controller
{
    
    public function index()
    {
        $contents = welcomecontent::latest()->get();
         return view('welcome.content.index', compact('contents'));
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
        $contents = welcomecontent::find($id);
        return view('welcome.content.edit',compact('contents'));
    }

    
    public function update( $id, Request $request)
    {
        $contents = welcomecontent::find($id);

        $header = request('header');
        $details = request('details');
       

        if ($image = $request->file('image')) {
             $destinationPath = 'public/welcome/logo/';
             $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
             $image->move($destinationPath, $profileImage);
             $contents->image =$profileImage;

             $contents->update([

            'header'=>$header,
            'details'=>$details,

            ]);

            
            Alert::success('Successfully updated!');
            return redirect()->route('welcomecontent.index');
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
