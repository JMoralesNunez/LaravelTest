<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view("users.index", compact("users"));
    }
    public function show($id)
    {
        $user = User::find($id);
        return view("users.show", compact("user"));
    }
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();
        return redirect()->route('users.show', ['id' => $id]);
    }

}
