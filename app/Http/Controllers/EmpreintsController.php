<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\empreints;
use DateTime;
use Illuminate\Support\Facades\Auth;

class EmpreintsController extends Controller
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
        return view("jeveuxempreinter");
    }

    public function process($id)
    {
        $empreint = new empreints();
        $empreint->id_users = Auth::id();
        $empreint->id_books = $id;
        $empreint->rented_at =  new DateTime();
        $empreint->due_at =  new DateTime('today + 2 weeks');
        $empreint->save();

        return redirect('infosdateretour');
    }
}
