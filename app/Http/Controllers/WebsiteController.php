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

