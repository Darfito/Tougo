<?php

namespace App\Http\Controllers;

use App\Models\destination;
use App\Models\Stories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Stories::all();
        return view('admin.dashboardst', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = destination::all();
        // dd($data);
        return view('admin.createst', ['data' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $user = Auth::user();
        if ($request->hasFile('img')) {
            $request->file('img')->move('storage/img_stories', $request->file('img')->getClientOriginalName());
        $img = $request->file('img')->getClientOriginalName();
        $data = Stories::create(
            [
                'name' => $request->name,
                'city' => $request->city,
                'konten' => $request->konten,
                'destination_id' => $request->destination_id,
                'user_id' => $user->id,
                'img' => $img,
                ]
                );
            };
        
        return redirect('/dashSto')->with('success', 'Record saved successfully.');

        // Stories::create($validatedData);

        // return redirect()->route('your-route.index')->with('success', 'Data created successfully.');
    }

    // public function show($id)
    // {
    //     $data = Stories::findOrFail($id);
    //     return view('show-view', compact('data'));
    // }

    public function edit($id)
    {
        $destination = destination::all();
        $data = Stories::find($id);
        return view('admin.editst', ['data' => $data, 'destinations' => $destination]);
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
    $data = Stories::find($id);
    $data->name = $request->input('name');
    $data->city = $request->input('city');
    $data->konten = $request->input('konten');
    $data->destination_id = $request->input('destination_id');
    
    if ($request->hasFile('img')) {
        // Remove the existing image file
        $oldImagePath = public_path('img_store/' . $data->img);
        if (file_exists($oldImagePath)) {
            unlink($oldImagePath);
        }
        
        // Store the new image file
        $image = $request->file('img');
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('img_store'), $imageName);
        $data->img = $imageName;
    }
    
    // dd($data);
        $data->save();
        return redirect('/dashSto')->with('success', 'Record updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $data = Stories::find($id);
        $data->delete();
        return redirect('/dashSto')->with('success', 'Record deleted successfully.');
    }

    
}
