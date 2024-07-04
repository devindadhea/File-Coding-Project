<?php

namespace App\Http\Controllers;

use App\Models\LinkFooterPrivate;
use Illuminate\Http\Request;

class LinkFooterPrivateController extends Controller
{
    public function index()
    {

        $footers = LinkFooterPrivate::all();
        return view('private/linkfooterPrivate', compact('footers')
        );
    }
    
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

    public function edit($id)
    {
        $footers = LinkFooterPrivate::findOrFail($id);
        return view('private/editDataLinkFooter', compact('footers'));
    }
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
 
    public function deleteData($id){
        $linkFooterPrivate = LinkFooterPrivate::findOrFail($id);
        $linkFooterPrivate->delete();
        return redirect()->back()->with('success', 'Data deleted successfully');
    }
}
