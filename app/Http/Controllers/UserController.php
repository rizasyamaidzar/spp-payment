<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;

class UserController extends Controller
{
    //
    public function index()
    {
        $user = User::where('akses', '<>', 'wali')->latest()->paginate(50);
        return view('users.index', [
            'users' => $user
        ]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'nohp' => 'required|unique:users',
            'akses' => 'required|in:operator,admin',
            'password' => 'required',
        ]);
        $validateData['password'] = bcrypt($validateData['password']);
        $validateData['email_verified_at'] = now();
        $validateData['nohp_verified_at'] = now();
        User::create($validateData);
        return back()->with("success", "User has been Created!");;
    }
    public function update(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'nohp' => 'required',
            'akses' => 'required|in:operator,admin',
        ]);
        $user = User::find($request->id);
        $user->update($validateData);
        return back()->with("success", "User has been Updated!");;
    }
    public function delete(Request $request)
    {
        $user = User::find($request->id);
        if ($user->email === 'operator@gmail.com') {
            return back();
        }
        $user->delete();
        return back()->with("success", "User has been Deleted!");;
    }
}
