<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    public function index()
    {
        $users=User::where('role_id','!=',2)->get();
        return view('pages.user',compact('users'));
    }

    public function edit(User  $user)
    {
        $roles = Role::all();
        return view('pages.updateuser',compact('user','roles'));
    }

    public function update(User $user, Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'adress' => ['required', 'string', 'max:255'],
            'firstname' => ['required', 'string', 'max:255'],
            'age' => ['required', 'integer', 'between:10,99'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);

        $user = $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age,
            'adress' => $request->adress,
            'firstname' => $request->firstname,
            'role_id'=> $request->role_id,
        ]);
        return redirect('dashboard/user');
    }

    public function show(User $user)
    {
        
        return view('pages.ShowUser',compact('user'));
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->back();
    }
}
