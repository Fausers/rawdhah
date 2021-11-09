<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardcontroller extends Controller
{
    //

    public function quotes(){
        $quotes = Quote::all();
        return view('rawdhar.dashboard.quote',compact("quotes"));
    }
}
