<?php

namespace App\Http\Controllers;

use App\Models\Server;
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
        $character = Auth::user()->characters->map(function ($rows) {
            $rows->server = Server::where('id', $rows->server)->first();
            return $rows;
        });
        return view('home', [
            "characters" => $character,
        ]);
    }
}
