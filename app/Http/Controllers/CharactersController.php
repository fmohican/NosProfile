<?php

namespace App\Http\Controllers;

use App\Models\Characters;
use App\Models\Equipment;
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
        $slug = Str::slug($request->input('Name'), "_");
        if(Characters::where('slug', $slug)->exists()) {
            $slug = $slug."#".rand(1000, 9999);
        }
        Characters::create([
            "name" => $request->input('Name'),
            "slug" => $slug,
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

    public function ViewCharacter($id) {
        try {
            $character = Characters::findOrFail($id);
            if(Auth::user()->id !== $character->account)
                throw new \Exception("You're not allowed to view this character.");

            return view('character.main', [
                "character" => $character,
                "equipment" => $this->ItemHelper($character),
            ]);
        } catch (\Exception $e) {
            return back()->withErrors($e);
        }
    }

    public function ItemHelper($character) {
        return (object) [
            "mask" => Equipment::where('characters', $character->id)->where('slot', 'mask')->first(),
            "headband" => Equipment::where('characters', $character->id)->where('slot', 'headband')->first(),
            "fairy" => Equipment::where('characters', $character->id)->where('slot', 'fairy')->first(),
            "primary" => Equipment::where('characters', $character->id)->where('slot', 'primary')->first(),
            "card" => Equipment::where('characters', $character->id)->where('slot', 'card')->first(),
            "secondary" => Equipment::where('characters', $character->id)->where('slot', 'secondary')->first(),
            "gloves" => Equipment::where('characters', $character->id)->where('slot', 'gloves')->first(),
            "armor" => Equipment::where('characters', $character->id)->where('slot', 'armor')->first(),
            "shoes" => Equipment::where('characters', $character->id)->where('slot', 'shoes')->first(),
            "ring" => Equipment::where('characters', $character->id)->where('slot', 'ring')->first(),
            "necklet" => Equipment::where('characters', $character->id)->where('slot', 'necklet')->first(),
            "bracelet" => Equipment::where('characters', $character->id)->where('slot', 'bracelet')->first(),
            "wing" => Equipment::where('characters', $character->id)->where('slot', 'wing')->first(),
            "amulet" => Equipment::where('characters', $character->id)->where('slot', 'amulet')->first(),
            "w_skin" => Equipment::where('characters', $character->id)->where('slot', 'w_skin')->first(),
            "c_hat" => Equipment::where('characters', $character->id)->where('slot', 'c_hat')->first(),
            "c_body" => Equipment::where('characters', $character->id)->where('slot', 'c_body')->first(),
        ];
    }
}
