<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function about()
    {
        return view('rawdhar.about');
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

    public function services()
    {
        return view('rawdhar.services');
    }

    //services controllers
    public function ground()
    {
        return view('rawdhar.services.ground-shipping');
    }

     public function large_project()
    {
        return view('rawdhar.services.large-projects');
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

