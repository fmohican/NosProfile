<?php

namespace App\Http\Controllers;

use App\Models\Characters;
use App\Models\Server;
use App\Models\User;

class PublicController extends Controller
{
    public function __construct()
    {
    }

    public function index($server, $account, $slug) {
        $user = User::where('uuid', $account)->first();
        $server = Server::where('short', $server)->first();
        $character = Characters::where('slug', $slug)->where('account', $user->id)->where('server', $server->id)->first();
        $cc = new CharactersController();
        try {
            if($character) {
                return view('character.public', [
                    "character" => $character,
                    "equipment" => $cc->ItemHelper($character),
                    "server" => $server,
                ]);
            }
            else
                return back()->withErrors(["error" => "Your not allowed to see this character"]);
        } catch (\Exception $e) {
            return back()->withErrors($e);
        }
    }
}
