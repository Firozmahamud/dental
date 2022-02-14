<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\social;

use Illuminate\Http\Request;

class socialController extends Controller
{
   
    public function index()
    {
        $socials = social::latest()->get();
        return view('social.index', compact('socials'));
    }

    
    public function create()
    {
        return view('social.create');

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
        $socials = social::find($id);
        return view('social.edit',compact('socials'));
    }

    
    public function update($id, Request $request)
    {
        $socials = social::find($id);

        $linkedin = request('linkedin');
        $twitter = request('twitter');
        $youtube = request('youtube');
        $github = request('github');
        
        $socials->update([

            'linkedin'=> $linkedin,
            'twitter'=> $twitter,
            'youtube'=> $youtube,
            'github'=>$github,

            ]);
            Alert::success('Successfully updated!');
            return redirect()->route('social.index');
       
       
    }

    
    public function destroy($id)
    {
        //
    }
}
