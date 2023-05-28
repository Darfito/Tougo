<?php

namespace App\Http\Controllers;

use App\Models\destination;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function landing()
    {
        return view('landing', [
            "title" => "Welcome!"
        ]);
    }


    public function stories(){
        return view('stories', [
            "title" => "stories"
        ]);
    }

    public function destination(){
        return view('destination', [
            "title" => "destination"
        ]);
    }

    public function aboutus(){
        return view('aboutus', [
            "title" => "about us"
        ]);
    }
    public function profile(){
        return view('account.profile');
    }
    public function dashboard(){
        return view('admin.dashboard');
    }
    public function customer(){
        return view('admin.dashboardc');
    }


}
