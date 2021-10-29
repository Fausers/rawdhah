<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class WebsiteController extends Controller
{


    /**
     * @throws ValidationException
     */
    public function driverapplication(Request $request)
    {
       /* print('hellen');
       $this->validate($request,[
            'fname'=>'required',
            'mname'=> 'required',
            'lname'=> 'required',
            'dob'=> 'required',
            'licence_date'=> 'required',
            'licence_type'=> 'required',
            'phone'=> 'required',
            'experience'=> 'required',
        ]);

         $drive = new Driver();
        $drive->fname=$request['fname'];
        $drive->mname=$request['mname'];
        $drive['lname']=$request->get('lname');
        $drive['dob']=$request->get('dob');
        $drive['license_date']=$request->get('licence_data');
        $drive['licence_type']=$request->get('licence_type');
        $drive['phone_number']=$request->get('phone');
        $drive['year_experience']=$request->get('experience'); */

        $drive = Driver::create($request->all());

        return $drive;

    }

    public function driver()
    {
          return view('rawdhar.driver-application');
    }

    public function contact()
    {
        return view('rawdhar.contact');

    }

    public function media()
    {
        return view('rawdhar.media');
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

