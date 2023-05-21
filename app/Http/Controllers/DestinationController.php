<?php

namespace App\Http\Controllers;

use App\Models\destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = destination::all();
        return view('admin.dashboardd', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data)
    {
          return view('createview');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new destination();
        $data->name = $request->input('name');
        $data->city = $request->input('city');
        $data->save();
        return redirect('/dashDes')->with('success', 'Record saved successfully.');
    }

    /**
     * Display the specified resource.
     *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
    // public function show($id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $data = destination::find($id);
        //  dd($data);
        return view('admin.editdes', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $data = destination::find($id);
        $data->name = $request->input('name');
        $data->city = $request->input('city');
        $data->save();
        return redirect('/dashDes')->with('success', 'Record updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $data = destination::find($id);
        $data->delete();
        return redirect('/dashDes')->with('success', 'Record deleted successfully.');
    }
}
