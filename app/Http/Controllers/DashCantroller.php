<?php

namespace App\Http\Controllers;
use App\Models\Driver;
use App\Models\Contact;
use App\Models\Quote;

use Illuminate\Http\Request;

class DashCantroller extends Controller
{
    public function dash()
    {
        # code...
        return view('layouts.lp');
    }


    public function drivers()
    {
        # code...
        $drivers = Driver::all();
        return view('CMS.drivers', compact('drivers'));
    }
    
    public function quotes()
    {
        # code...
        $quotes = Quote::all();
        return view('CMS.quotes', compact('quotes'));
    }

    public function inquiry()
    {
        # code...
        $contacts = Contact::get();
        return view('CMS.inquiry', compact('contacts'));
    }

    public function view($id)
    {
        $driver = Driver::findOrFail($id);
        return view('CMS.driver_detail',compact('driver'));
    }

}
