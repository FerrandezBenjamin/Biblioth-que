<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\empreints;
use Illuminate\Support\Facades\Auth;

class InfosDateRetourController extends Controller
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
        $user_id= Auth::id();
        
        $dateretourlivre = empreints::where('id_users', '=', $user_id)->get();
        return view('infosdateretour', ['empreints'=>$dateretourlivre]);
        
    }
}