<?php

namespace App\Http\Controllers;

use App\Models\destination;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('logout');
    }

    public function stories(){
        return view('stories', [
            "title" => "stories"
        ]);
    }

    public function destination(){
        $data = destination::all();
        return view('destination', [
            'data' => $data ,
            "title" => "destination"
        ]);
    }

    public function aboutus(){
        return view('aboutus', [
            "title" => "about us"
        ]);
    }
    public function dashboard(){
        return view('admin.dashboard');
    }
    public function customer(){
        return view('admin.dashboardc');
    }


}
