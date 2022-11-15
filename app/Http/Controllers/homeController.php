<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Pasien;
class homeController extends Controller
{
    public function home(){
        return view('welcome');
    }

    public function store(Request $request){
        $data=$request->all();
        $pasien=Pasien::create($request->all());
        return $pasien;
    }
}
