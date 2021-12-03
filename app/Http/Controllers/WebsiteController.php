<?php

namespace App\Http\Controllers;

use Image;
use File;
use App\Models\Driver;
use App\Models\Contact;
use App\Models\Quote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class WebsiteController extends Controller
{


    /**
     * @throws ValidationException
     */
    public function driverapplication(Request $request)
    {
    
       
        if($request->hasFile('passport')){
            $destination_path = 'public/images/passport';
            if(!file_exists($destination_path))
                    mkdir($destination_path, 0777,true);
                    
            $image =$request->file('passport');
            $image_name =$image->getClientOriginalName();
            $passport_path = $request->file('passport')->storeAs($destination_path,$image_name);

            $input['passport']=$image_name;
        }


       
        if($request->hasFile('nida')){
            $destination_path = 'public/images/nida';
            if(!file_exists($destination_path))
                    mkdir($destination_path, 0777,true);

            $image =$request->file('nida');
            $image_name =$image->getClientOriginalName();
            $nida_path = $request->file('nida')->storeAs($destination_path,$image_name);

            $input['nida']=$image_name;
        }



        if($request->hasFile('licence')){
            $destination_path = 'public/images/licences';
            if(!file_exists($destination_path))
                    mkdir($destination_path,true);

            $image =$request->file('licence');
            $image_name =$image->getClientOriginalName();
            $licence_path = $request->file('licence')->storeAs($destination_path,$image_name);

            $input['licence']=$image_name;
        }

        if($request->hasFile('employment_letter')){
            $destination_path = 'public/images/letters';
            if(!file_exists($destination_path))
                    mkdir($destination_path, 0777,true);

            $image =$request->file('employment_letter');
            $image_name =$image->getClientOriginalName();
            $employment_path = $request->file('employment_letter')->storeAs($destination_path,$image_name);

            $input['employment_letter']=$image_name;
        }


       // $drive = Driver::create($request->all());
        $drive =new Driver();
        $drive->fname = $request->fname;
        $drive->mname = $request->mname;
        $drive->lname = $request->lname;
        $drive->dob = $request->dob;
        $drive->license_date = $request->license_date;
        $drive->licence_type= $request->licence_type;
        $drive->phone_number= $request->phone_number;
        $drive->e_address = $request->e_address;
        $drive->year_experience = $request->year_experience;
        $drive->passport = $passport_path;
        $drive->nida = $nida_path;
        $drive->licence = $licence_path;
        $drive->employment_letter = $employment_path;
        $drive->save();

        

        return view('welcome');

    }

    public function driver()
    {
        return view('rawdhar.driver-application');
    }

    public function contactinfo(Request $request)
    {
        $contact_info = Contact::create($request->all());

        return view('rawdhar.contact');
       
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

        return view('welcome');
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


    public function location()
    {
        return view('rawdhar.locations');
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

