<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\destination;
use App\Models\Stories;

class TellController extends Controller
{
    public function showtell($id)
    {
        $destination = destination::all();
        $data = Stories::findOrFail($id);
        return view('tell', ['data' => $data, 'destinations' => $destination, "title" => "Stories"]);
    }
}
