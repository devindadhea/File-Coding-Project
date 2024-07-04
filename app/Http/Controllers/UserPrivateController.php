<?php

namespace App\Http\Controllers;

use App\Models\UserPrivate;
use Illuminate\Http\Request;

class UserPrivateController extends Controller
{
    public function index()
    {
        $users = UserPrivate::all();
        return view ('private/userPrivate', compact('users'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_name' => 'required',
            'password' => 'required',
        ]);
    
        UserPrivate::create($validatedData);
    
        return redirect('/user-private');
    }

    public function edit($id)
    {
        $users = UserPrivate::findOrFail($id);
        return view('private/editDataUser', compact('users'));
    }

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

    public function deleteData($id){
        $userPrivate = UserPrivate::findOrFail($id);
        $userPrivate->delete();

        return redirect('/user-private')->with('success', 'User deleted successfully');
}
}
