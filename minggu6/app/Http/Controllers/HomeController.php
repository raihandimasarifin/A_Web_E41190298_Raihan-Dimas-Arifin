<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

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
        $this->middleware('roleAdmin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('backend.dashboard');
    }

    public function profile()
    {
        $user = Auth::user();
        $roleId = $user->role;
        $role = DB::table('role')->where('id',$roleId)->first();
        //dd($role);
        return view('backend.profile', compact('user','role'));
    }
}
