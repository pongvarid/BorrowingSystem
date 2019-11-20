<?php

namespace App\Http\Controllers;

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
        $auth = Auth::user();
        session_start();
        $_SESSION["type"] = $auth->type;

        if($auth->type == 1){
            return view('Officer/indexofficer');
        }else{
            return view('Borrower/indexborrower');
        }
     
    }
}
