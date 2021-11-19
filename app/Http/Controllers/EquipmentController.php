<?php

namespace App\Http\Controllers;

use App\Models\Characters;
use App\Models\Equipment;
use App\Models\Items;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Str;

class EquipmentController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function EditEquipment($id, $slot) {
        $character = Characters::findOrFail($id);

        $classItemsGender = Items::where('slot', $slot)->where('classes', $character->classes)->where('gender', $character->gender)->get();
        $classItems = Items::where('slot', $slot)->where('classes', $character->classes)->where('gender', 'Unisex')->get();
        $itemsSlot = Items::where('slot', $slot)->where('classes', 'all')->where('gender', 'Unisex')->get();

        /*
         * Merge
         */
        $classPlusGender = $classItems->merge($classItemsGender);
        $items = $itemsSlot->merge($classPlusGender);

        return view('character.editEquipment', [
            'items' => $items,
            'slot' => $slot,
            'character' => $character,
        ]);
    }

    public function SaveEquipment($id, $slot, Request $request) {
        $character = Characters::findOrfail($id);
        if($request->hasFile('ImageUpload')) {
            $request->validate([
                "vnum" => 'required|integer|max:99999',
                "ImageUpload" => 'required|image|dimensions:min_width=50,min_height=50,max_width=4000,max_height=4000',
            ]);
            $fileName = Str::slug(Str::uuid(), "_").time().".".$request->file('ImageUpload')->getClientOriginalExtension();
            Storage::disk('public')->putFileAs("uploads/users/".$character->account."/".$character->id."/", $request->file('ImageUpload'), $fileName);
            $this->ReplaceEquipment($id, $slot);
            Equipment::create([
                "item" => $request->input('vnum'),
                "image" => "storage/uploads/users/".$character->account."/".$character->id."/".$fileName,
                "slot" => $slot,
                "characters" => $character->id,
                "account" => $character->account,
                "hidden" => false,
            ]);
            return response()->redirectToRoute('app.character.details.view', [$id]);
        }
        else {
            $request->validate([
                "vnum" => 'required|integer|max:99999',
                "ImageImport" => 'required|url'
            ]);
            if(getimagesize($request->input('ImageImport')) !== false) {
                //$file = file_get_contents();
                $fileName = Str::slug(Str::uuid(), "_").time().".jpg";
                Storage::disk('public')->putFileAs("uploads/users/".$character->account."/".$character->id."/", $request->input('ImageImport'), $fileName);
                $this->ReplaceEquipment($id, $slot);
                Equipment::create([
                    "item" => $request->input('vnum'),
                    "image" => "storage/uploads/users/".$character->account."/".$character->id."/".$fileName,
                    "slot" => $slot,
                    "characters" => $character->id,
                    "account" => $character->account,
                    "hidden" => false,
                ]);
                return response()->redirectToRoute('app.character.details.view', [$id]);
            }
            else
                return back()->withErrors("Invalid Image Link");
        }
    }

    public function ReplaceEquipment($character, $slot) {
        $eq = Equipment::where('slot', $slot)->where('characters', $character)->first();
        if(is_null($eq))
            return true;
        else {
            $eq->delete();
        }
    }

    public function DeleteAllEquipment($id) {
        Equipment::where('characters', $id)->delete();
        return back();
    }
}
