<?php

namespace App\Http\Controllers;

use App\User;
use App\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $emp_id = Auth::user()->id;
        $applications = Application::latest()->where('user_id', "=", $emp_id)->paginate(20);
        return view('profile', compact('applications'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function profile()
    {
        $emp_id = Auth::user()->id;
        $applications = Application::latest()->where('user_id', "=", $emp_id)->paginate(20);
        return view('profile', compact('applications'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function adminHome()
    {
        return view('admin_applications');
    }

    public function search(Request $request)
    {
        $data = $request->all();
        $key= $data["search"];
        $users = User::search($key)->paginate(20);
        return view('search', compact('users'))->with('i', (request()->input('page', 1) - 1) * 20);
    }
}
