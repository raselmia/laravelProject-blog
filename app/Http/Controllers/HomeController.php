<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\User;
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
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $user = User::all();
        $users = DB::table('users')->where('usercontrol', 1)->get();
        $writer = DB::table('users')
                                    ->where('usercontrol', 0)
                                    ->where('active', 1)
                                    ->get();

        $newwriter = DB::table('users')->where('active', 0)->get();

        return view('pages.dashboard', compact('users', 'writer', 'newwriter'));

    // return view('pages.dashboard', ['users' => $user], ['newwriter' => $new_writers], ['writer' => $writers]  );
    
    }
}
