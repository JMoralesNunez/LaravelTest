<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::paginate();
        return view("users.index", compact("users"));
    }
    public function show($id)
    {
        $user = User::find($id);
        return view("users.show", compact("user"));
    }
    public function create(){
        return view("users.create");
    }
    public function store(Request $request  ){  
        $user = User::create($request->all());
        return redirect()->route('users.index');
    }
    public function edit($id){
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update($request->all());
        return redirect()->route('users.index');
    }
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users.index');
    }
}
