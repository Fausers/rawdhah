<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function about()
    {
        return view('rawdhar.about');
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
    
}

