<?php

namespace App\Http\Controllers;

use App\Models\Aboutus;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AboutusController extends Controller
{

    public function index()
    {
        $about_us = Aboutus::latest()->get();
        return view('aboutus.index', compact('about_us'));
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
        $about_us = Aboutus::find($id);
        return view('aboutus.edit',compact('about_us'));
    }


    public function update(Request $request, $id)
    {
        $about_us = Aboutus::find($id);

        $about_us_details = request('about_us_details');
        $about_us->update([

            'about_us_details'=> $about_us_details,

            ]);
            Alert::success('Successfully updated!');
            return redirect()->route('aboutus.index');

    }


    public function destroy($id)
    {
        //
    }
}
