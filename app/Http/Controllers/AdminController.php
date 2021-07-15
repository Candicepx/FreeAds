<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function showIndex()
    {
        return view('admin.index');
    }

    public function showUsers()
    {
        // $users = null;
        $users = User::orderBy('id', 'DESC')->paginate(8);
        //compact : envoie la variable $users dans le blade de :
        return view('admin.users.index', compact('users'));
    }

    public function showUsersEdit($id)
    {
        $user = User::where('id', '=' , $id)->firstOrFail();

        return view('admin.users.edit', compact('user'));
    }

    public function userUpdate(Request $request, $id) 
    {
        $user = User::where('id', '=', $id)->firstOrFail();

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        //hash = personne ne voit le mot de passe
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return redirect()->route('admin.users');
    }

    public function userDelete($id)
    {
        $user = User::where('id', '=', $id)->firstOrFail();
        $user->delete();

        return redirect()->back();
    }
}
