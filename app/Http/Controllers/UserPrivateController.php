<?php

namespace App\Http\Controllers;

use App\Models\UserPrivate;
use Illuminate\Http\Request;

class UserPrivateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = UserPrivate::all();
        return view ('private/userPrivate', compact('users'));
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
            'user_name' => 'required',
            'password' => 'required',
        ]);
    
        UserPrivate::create($validatedData);
    
        return redirect('/user-private');
    }

    /**
     * Display the specified resource.
     */
    public function show(UserPrivate $userPrivate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $users = UserPrivate::findOrFail($id);
        return view('private/editDataUser', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $users = UserPrivate::findOrFail($id);
        $user_name = $request->user_name;
        $password = $request->password;

        $users->user_name = $user_name;
        $users->password = $password;
        $user = $users->save();
        if ($user) {
            session()->flash('success', 'User update successfully');
            return redirect('/user-private');
        } else {
            session()->flash('error', 'Some problem occure');
            return redirect(route('editDatauser.edit'));
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserPrivate $userPrivate)
    {
        //
    }
    public function deleteData($id){
        $userPrivate = UserPrivate::findOrFail($id);
        $userPrivate->delete();

        return redirect('/user-private');
}
}
