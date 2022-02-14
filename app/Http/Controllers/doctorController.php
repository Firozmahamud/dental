<?php

namespace App\Http\Controllers;

use App\Models\Aboutus;
use RealRashid\SweetAlert\Facades\Alert;

use App\Models\doctor;
use App\Models\Contact;
use App\Models\Banner;
use App\Models\service;
use App\Models\social;
use App\Models\welcomeimg;
use App\Models\welcomecontent;
use App\Models\welcomehaeding;
use Illuminate\Http\Request;

class doctorController extends Controller
{

    public function welcome()
    {
        $contact= Contact::first();
        $doctor= doctor::all();
        $banner= Banner:: first();
        $service= service:: all();
        $social= social:: first();
        $welcome= welcomeimg:: first();
        $welcomecontent= welcomecontent::all();
        $headings = welcomehaeding:: first();
        $about_us= Aboutus:: all();


        return view('welcome',compact('contact','doctor','banner','service','social','welcome','welcomecontent','headings','about_us'));
    }

    public function ourdoctors()
    {
        $doctor= doctor::all();
        $contact= Contact::first();
        $social= social:: first();


        return view('doctor.ourdoctors', compact('doctor','contact','social'));
    }
    public function aboutus()
    {
        $doctor= doctor::all();
        $contact= Contact::first();
        $social= social:: first();
        $about_us= Aboutus::first();


        return view('doctor.aboutus', compact('doctor','contact','social','about_us'));
    }
    public function contactus()
    {
        $doctor= doctor::all();
        $contact= Contact::first();
        $social= social:: first();


        return view('contact.contactus', compact('doctor','contact','social'));
    }


    public function index()
    {

        $doctors = doctor:: latest()->get();

        return view('doctor.index', compact('doctors'));
    }


    public function create()
    {

        return view('doctor.create');

    }


    public function store(Request $request)
    {


        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
           'name' => 'required',
           'designation'=>'required',
           'description'=>'',



        ]);

        $doctors = new doctor;


        $doctors->name=$request->name;
        $doctors->designation=$request->designation;
        $doctors->description=$request->description;


        if ($image = $request->file('image')) {
             $destinationPath = 'public/doctors/image/';
             $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $doctors->image =$profileImage  ;

            $doctors->save();

            Alert::success('Successfully created!');
            return redirect()->route('doctor.index');

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
        $doctors= doctor::find($id);
        return view('doctor.edit',compact('doctors'));

    }


    public function update( $id,Request $request)
    {

        $doctors= doctor::find($id);
        $name = request('name');
        $designation = request('designation');
        $description = request('description');

        if ($image = $request->file('image')) {
             $destinationPath = 'public/doctors/image/';
             $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
             $image->move($destinationPath, $profileImage);
             $doctors->image =$profileImage;

        $doctors->update([
               'name'=> $name,
               'designation'=>$designation,
               'description'=> $description

            ]);
            Alert::success('Successfully updated!');
            return redirect()->route('doctor.index');


        }
        else {
            alert()->error('Error', ' not updated!');
            return redirect()->route('doctor.index');


        }
    }


    public function destroy($id)
    {
        $doctors= doctor::find($id);


         $data = $doctors->delete();

         unlink("public/doctors/image/". $doctors->image);

         if ($data) {
            Alert::success('Successfully deleted!');
            return redirect()->route('doctor.index');

         } else {
            alert()->error('Error', ' not created!');
            return redirect()->route('doctor.index');


         }
    }
}
