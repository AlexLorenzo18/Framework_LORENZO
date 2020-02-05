<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('home');
    }

    public function admin(Request $req){

        $users = auth()->user();

         return view('adminOnlyPage', [
        'users' => $users, 
        ]);
        }
        public function member(Request $req){
        return view('adminOnlyPage')->withMessage('Member');
        }
}
