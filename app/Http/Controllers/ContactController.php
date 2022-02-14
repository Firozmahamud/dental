<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;

use App\Models\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    
    
    public function index()
    {
        $contacts = Contact::latest()->get();
        return view('contact.index', compact('contacts'));
    }

    
    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {


        $request->validate([
     
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'phone'=>'required|unique:contacts',
            'email'=>'required|unique:contacts',
            'address'=>'required',

            
            
        ]);
     
       // $doctors = new doctor;
       $contacts = new  Contact;
       

        
       $contacts->phone=$request->phone;
       $contacts->email=$request->email;
       $contacts->address=$request->address;


        if ($image = $request->file('image')) {
             $destinationPath = 'public/logo/image/';
             $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $contacts->image =$profileImage  ;

            $contacts->save();

            Alert::success('Successfully created!');
            return redirect()->route('contact.index');

            // $notification = array('messege' => 'Successfully saved!', 'alert-type' => 'success');
            //  return redirect()->back()->with($notification);

         } else {

            alert()->error('Error', ' not created!');
            return redirect()->route('contact.index');

            //  $notification = array('messege' => ' not Saved !', 'alert-type' => 'error');
            //  return redirect()->back()->with($notification);
         }


    }
    
    public function edit($id)
    {
        $contacts= Contact::find($id);
        return view('contact.edit',compact('contacts'));
    }

    
    public function update( $id,Request $request)
    {
       
        $contacts= Contact::find($id);

        $phone = request('phone');
        $email = request('email');
        $address = request('address');

        if ($image = $request->file('image')) {
             $destinationPath = 'public/logo/image/';
             $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
             $image->move($destinationPath, $profileImage);
             $contacts->image =$profileImage;

             $contacts->update([


                'phone'=>$phone,
               'email'=> $email,
               'address'=> $address


            ]);

            Alert::success('Successfully updated!');
            return redirect()->route('contact.index');

        //     $notification = array('messege' => 'Successfully updated!', 'alert-type' => 'success');
        // return redirect()->route('contact.index')->with($notification);
        }
        else {
            alert()->error('Error', ' not updated!');
            return redirect()->route('contact.index');
            // $notification = array('messege' => 'not updated !', 'alert-type' => 'error');
            // return redirect()->back()->with($notification);
        }
    }

   
    public function destroy($id)
    {
        //
    }
}
