<?php

namespace App\Http\Controllers;

use App\Models\homePrivate;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class HomePrivateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = homePrivate::all();
        return view('private/homePrivate', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // ddd($request);
        // return $request->file('image')->store('home-image');
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

    /**
     * Display the specified resource.
     */
    public function show(homePrivate $homePrivate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = homePrivate::findOrFail($id);
       
        return view('private/editDataHome', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        // return $request->file('image')->store('home-image');
        $validatedData = $request->validate([
            'name' => 'required',
            'greeting' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg|max:1024',
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(homePrivate $homePrivate)
    {
        //
    }

    public function deleteData($id){
        $homePrivate = homePrivate::findOrFail($id);
        $homePrivate->delete();

        return redirect()->back()->with('success', 'Data deleted successfully');
    }
}
