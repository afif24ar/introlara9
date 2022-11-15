<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class latihancontroller extends Controller
{
    public function latihan($variabel){
        $x=$variabel;
        return view('latihan',['value'=> $x]);
    }
}
