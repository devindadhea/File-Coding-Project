<?php

namespace App\Http\Controllers;

use App\Models\ProfilePrivate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ProfilePrivateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profiles = ProfilePrivate::all();
        return view ('private/profilePrivate', compact('profiles'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'biodata' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg|max:2159',
        ]);
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('home-image');
        }
        
        ProfilePrivate::create($validatedData);
    
        return redirect('/profile-private');
    }

    public function edit($id)
    {
        $profiles = ProfilePrivate::findOrFail($id);
       
        return view('private/editDataProfile', compact('profiles'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'biodata' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg|max:2159',
        ]);

        $data = ProfilePrivate::findOrFail($id);

        if ($request->file('image')) {
            if ($request->oldImage) {
            Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('home-image');
        } else {
            $validatedData['image'] = $data->image;
        }

        $data->update($validatedData);

        if ($data) {
            session()->flash('success', 'Profile update successfully');
            return redirect('/profile-private');
        } else {
            session()->flash('error', 'Some problem occure');
            return redirect(route('editDataProfile.edit'));
        }

        
    }

    public function deleteData($id){
        $profilePrivate = ProfilePrivate::findOrFail($id);
        $profilePrivate->delete();

        return redirect()->back()->with('success', 'Data deleted successfully');
}
}

