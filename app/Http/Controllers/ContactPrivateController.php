<?php

namespace App\Http\Controllers;

use App\Models\ContactPrivate;
use Illuminate\Http\Request;


class ContactPrivateController extends Controller
{
    public function index()
    {
        $contacts = ContactPrivate::all();
        return view('private/contactPrivate', compact('contacts')
        );
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'emailku' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);
    
        ContactPrivate::create($validatedData);
        return redirect('/contact-private');
    } 
    public function edit($id)
    {
        $contacts = ContactPrivate::findOrFail($id); 
        return view('private/editDataContact', compact('contacts'));
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'emailku' => 'required|email',
            'address' => 'required',
            'phone' => 'required',
        ]);

        $contact = ContactPrivate::findOrFail($id);
        $contact->update($validatedData);

        session()->flash('success', 'Profile updated successfully');
        return redirect()->route('contact-private.index');
       
    }

    public function deleteData($id){
        $contactPrivate = ContactPrivate::findOrFail($id);
        $contactPrivate->delete();

        return redirect()->back()->with('success', 'Data deleted successfully');
    }
}

