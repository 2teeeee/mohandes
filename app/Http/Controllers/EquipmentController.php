<?php

namespace App\Http\Controllers;

use App\Enums\ItemTypes;
use App\Models\Item;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EquipmentController extends Controller
{
    public function list(): View {
        $equipments = Item::where("type", ItemTypes::Equipment)->get();

        return view("equipment.list", [
            'equipments'  => $equipments,
        ]);
    }

    public function create(): View {
        return view("equipment.create");
    }

    public function save(Request $request): RedirectResponse {
        $request->validate([
            'value' => ['required'],
        ]);

        Item::create([
            'value' => $request->input("value"),
            'type'  => ItemTypes::Equipment,
        ]);

        return redirect()->route('equipments');
    }
}
