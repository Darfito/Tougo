<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use App\Models\destination;
use App\Models\Stories;
use Illuminate\Database\Eloquent\Model;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('logout');
    }
    public function index()
    {
        $user = auth()->user();
        return view(
            'account.profile',
            ['user' => $user, "title" => "Profile"]
        );
    }
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('account.editprofile', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->notelp = $request->input('notelp');
        $user->gender = $request->input('gender');
        if ($request->hasFile('img')) {
            $request->validate([
                'img' =>
                'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $profilePicture = $request->file('img');
            $imageName = time() . '.' .  $profilePicture->extension();

            // Delete the previous profile picture if it exists
            if ($user->img) {
                Storage::delete('public/img_profile/' . $user->img);
            }

            // Store the new profile picture
            $profilePicture->storeAs('public/img_profile', $imageName);

            // Update the user's profile picture
            $user->img = $imageName;
        }

        // Update the user's profile picture
        $user->save();
        return redirect('/profile')->with('success', 'Profile picture updated successfully.');
    }



    //story create
    public function tellstory()
    {
        $data = destination::all();
        // dd($data);
        return view('account.tellstory', ['data' => $data]);
    }

    //story store
    public function storest(Request $request)
    {
        $user = auth()->user();;

        if (!$user) {
            return redirect('/login')->with('Login dulu.');
        }
        // dd($user);
        if ($request->hasFile('img')) {
            $data = Stories::create([
                'name' => $request->name,
                'city' => $request->city,
                'konten' => $request->konten,
                'destination_id' => $request->destination_id,
                'user_id' => $user->id,
                'img' => $request->file('img')->getClientOriginalName(),
            ]);

            $request->file('img')->move('storage/img_stories', $request->file('img')->getClientOriginalName());
        }
        else{
            $data = Stories::create([
                'name' => $request->name,
                'city' => $request->city,
                'konten' => $request->konten,
                'destination_id' => $request->destination_id,
                'user_id' => $user->id,
            ]);}
        return redirect('/profile')->with('success', 'Record saved successfully.');
    }
}
