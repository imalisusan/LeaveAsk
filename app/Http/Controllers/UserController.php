<?php

namespace App\Http\Controllers;

use App\User;
use App\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreUserRequest;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(20);
        return view('users.index', compact('users'))->with('i', (request()->input('page', 1) - 1) * 20);
    }

    public function edit(User $user)
    {   
        $departments =  Department::get();
        $user = Auth::user();
        return view('users.edit', compact('departments', 'user'));
    }

    public function update(StoreUserRequest $request, User $user)
    { 
        $data = $request->validated();
        $user->name = $data["name"];
        $user->email = $data["email"];
        $user->phone = $data["phone"];
        $user->department = $data["department"];
        $user->password = bcrypt($data["password"]);
        $user->update();
        return back();
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully');
    }
}