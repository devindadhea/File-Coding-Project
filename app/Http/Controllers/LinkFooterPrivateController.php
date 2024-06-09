<?php

namespace App\Http\Controllers;

use App\Models\LinkFooterPrivate;
use Illuminate\Http\Request;

class LinkFooterPrivateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $footers = LinkFooterPrivate::all();
        return view('private/linkfooterPrivate', compact('footers')
        );
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
        $validatedData = $request->validate([
            'myskills' => 'required',
            'shortcut' => 'required',
            'address' => 'required',
        ]);
    
        LinkFooterPrivate::create($validatedData);
    
        return redirect('/linkfooter-private');
    }

    /**
     * Display the specified resource.
     */
    public function show(LinkFooterPrivate $linkFooterPrivate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $footers = LinkFooterPrivate::findOrFail($id);
        return view('private/editDataLinkFooter', compact('footers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $footers = LinkFooterPrivate::findOrFail($id);
        $myskills = $request->myskills;
        $shortcut = $request->shortcut;
        $address = $request->address;

        $footers->myskills = $myskills;
        $footers->shortcut = $shortcut;
        $footers->address = $address;
        $footer = $footers->save();
        if ($footer) {
            session()->flash('success', 'footer update successfully');
            return redirect('/linkfooter-private');
        } else {
            session()->flash('error', 'Some problem occure');
            return redirect(route('editDataLinkfooter.edit'));
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LinkFooterPrivate $linkFooterPrivate)
    {
        //
    }
    public function deleteData($id){
        $linkFooterPrivate = LinkFooterPrivate::findOrFail($id);
        $linkFooterPrivate->delete();

        return redirect()->back()->with('success', 'Data deleted successfully');
    }
}
