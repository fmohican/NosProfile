<?php

namespace App\Http\Controllers;

use App\Models\Characters;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CharactersController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function CreateCharacter(Request $request) {
        $id = Auth::user()->id;
        $validated = $request->validate([
            'Name' => 'required|max:24',
            'FName' => 'max:24',
            'Level' => 'required|min:1|max:99',
            'CLevel' => 'required|min:1|max:99',
            'Gender' => 'required',
            'Classes' => 'required',
            'server' => 'required',
        ]);

        Characters::create([
            "name" => $request->input('Name'),
            "slug" => Str::slug($request->input('Name'), "_"),
            "level" => $request->input('Level'),
            "clevel" => $request->input('CLevel'),
            "family" => $request->input('FName'),
            "server" => $request->input('server'),
            "classes" => $request->input('Classes'),
            "gender" => $request->input('Gender'),
            "account" => $id,
        ]);

        return back();
    }
}
