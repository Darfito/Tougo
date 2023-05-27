<?php

namespace App\Http\Controllers;

use App\Models\Stories;
use Illuminate\Http\Request;

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
        return view('admin.dashboardst',['data' => $data]);
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
        $data = Stories::create($request->all());
        if ($request->hasFile('img')) {
            $request->file('img')->move('/img_store', $request->file('img')->getClientOriginalName());
            $data->img = $request->file('img')->getClientOriginalName();
            $data->save();
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
        $data = Stories::find($id);
        return view('admin.editst', ['data' => $data]);
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
        $data->konten = $request->input('content');
        $data->konten = $request->input('img');
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
