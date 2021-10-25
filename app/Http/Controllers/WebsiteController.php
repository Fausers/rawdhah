<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{


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

