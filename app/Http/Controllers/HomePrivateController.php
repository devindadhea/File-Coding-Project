<?php

namespace App\Http\Controllers;

use App\Models\homePrivate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomePrivateController extends Controller
{
   public function index()
    {
        $data = homePrivate::all();
        return view('private/homePrivate', compact('data'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'greeting' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg|max:1024',
        ]);
       
if ($request->file('image')) {
    $validatedData['image'] = $request->file('image')->store('home-image');
}

    homePrivate::create($validatedData);
    
        return redirect('/home-private');
    }
   
    public function edit($id)
    {
        $data = homePrivate::findOrFail($id);
       
        return view('private/editDataHome', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'greeting' => 'required',
            'description' => 'required',
            'image' => 'nullable|mimes:png,jpg,jpeg|max:1024',
        ]);

        $data = homePrivate::findOrFail($id);

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
            session()->flash('success', 'Home update successfully');
            return redirect('/home-private');
        } else {
            session()->flash('error', 'Some problem occure');
            return redirect(route('editDataHome.edit'));
        }
    
    }

    public function deleteData($id){
        $homePrivate = homePrivate::findOrFail($id);
        $homePrivate->delete();

        return redirect()->back()->with('success', 'Data deleted successfully');
    }
}
