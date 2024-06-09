<?php

namespace App\Http\Controllers;

use App\Models\ContactPrivate;
use Illuminate\Http\Request;

class ContactPrivateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = ContactPrivate::all();
        return view('private/contactPrivate', compact('contacts')
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
            'emailku' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);
    
        ContactPrivate::create($validatedData);
    
        return redirect('/contact-private');
    }

    /**
     * Display the specified resource.
     */
    public function show(ContactPrivate $contactPrivate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $contacts = ContactPrivate::findOrFail($id);
       
        return view('private/editDataContact', compact('contacts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $contacts = ContactPrivate::findOrFail($id);
        $emailku = $request->emailku;
        $address = $request->address;
        $phone = $request->phone;

        $contacts->emailku = $emailku;
        $contacts->address = $address;
        $contacts->phone = $phone;
        
        $contact = $contacts->save();
        if ($contact) {
            session()->flash('success', 'Profile update successfully');
            return redirect('/contact-private');
        } else {
            session()->flash('error', 'Some problem occure');
            return redirect(route('editDataContact.edit'));
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactPrivate $contactPrivate)
    {
        //
 
    }
    public function deleteData($id){
        $contactPrivate = ContactPrivate::findOrFail($id);
        $contactPrivate->delete();

        return redirect()->back()->with('success', 'Data deleted successfully');
    }
}
