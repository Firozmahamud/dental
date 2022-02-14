<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\welcomehaeding;


use Illuminate\Http\Request;

class welcomehaedingsController extends Controller
{
    
    public function index()
    {
        $headings = welcomehaeding::latest()->get();
        return view('welcome.haeding.index', compact('headings'));
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
        $headings = welcomehaeding::find($id);

        // $socials = social::find($id);
        return view('welcome.haeding.edit',compact('headings'));
    }

    
    public function update( $id, Request $request)
    {
        $headings = welcomehaeding::find($id);

        $header = request('header');
        $details = request('details');
        
        
        $headings->update([

            'header'=> $header,
            'details'=> $details,
            

            ]);
            Alert::success('Successfully updated!');
            return redirect()->route('welcomehaedings.index');
       
    }

    
    public function destroy($id)
    {
        //
    }
}
