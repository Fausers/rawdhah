<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Contact;
use App\Models\Quote;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class WebsiteController extends Controller
{


    /**
     * @throws ValidationException
     */
    public function driverapplication(Request $request)
    {
    
        $drive = Driver::create($request->all());

        if($request->hasFile('passport')){
            $destination_path = 'public/images/passpots';
            $image =$request->file('passport');
            $image_name =$image->getClientOriginalName();
            $path = $request->file('passport')->storeAs($destination_path,$image_name);

            $input['passport']=$image_name;
        }

        if($request->hasFile('nida')){
            $destination_path = 'public/images/nida_photos';
            $image =$request->file('nida');
            $image_name =$image->getClientOriginalName();
            $path = $request->file('nida')->storeAs($destination_path,$image_name);

            $input['nida']=$image_name;
        }


        if($request->hasFile('licence')){
            $destination_path = 'public/images/licences';
            $image =$request->file('licence');
            $image_name =$image->getClientOriginalName();
            $path = $request->file('licence')->storeAs($destination_path,$image_name);

            $input['licence']=$image_name;
        }

        

        return $drive;

    }

    public function driver()
    {
        return view('rawdhar.driver-application');
    }

    public function contactinfo(Request $request)
    {
        $contact_info = Contact::create($request->all());

        return $contact_info;
       
    }

    public function contact()
    {
        return view('rawdhar.contact');

    }

    public function media()
    {
        return view('rawdhar.media');
    }

    public function quoteinfo(Request $request)
    {
        $quote_info = Quote::create($request->all());

        return $quote_info;
    }

    //about company controllers

    public function about()
    {
        return view('rawdhar.about');
    }

     public function clients()
    {
        return view('rawdhar.clients');
    }

     public function events()
    {
        return view('rawdhar.events');
    }


    public function history()
    {
        return view('rawdhar.history');
    }

    //services controllers

    public function services()
    {
        return view('rawdhar.services');
    }

    public function consulting()
    {
        return view('rawdhar.services.consulting');
    }

     public function ground()
    {
        return view('rawdhar.services.ground-shipping');
    }

     public function large_project()
    {
        return view('rawdhar.services.large-projects');
    }

      public function packaging()
    {
        return view('rawdhar.packaging');
    }

     public function warehousing()
    {
        return view('rawdhar.services.warehousing');
    }

    public function contract_logistics()
    {
        return view('rawdhar.services.contract-logistics');
    }


}

