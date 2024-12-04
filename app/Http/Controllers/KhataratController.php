<?php

namespace App\Http\Controllers;

use App\Enums\ItemTypes;
use App\Models\Item;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class KhataratController extends Controller
{
    public function list(): View {
        $khatarats = Item::where("type", ItemTypes::Khatarat)->get();

        return view("khatarat.list", [
            'khatarats'  => $khatarats,
        ]);
    }

    public function create(): View {
        return view("khatarat.create");
    }

    public function save(Request $request): RedirectResponse {
        $request->validate([
            'value' => ['required'],
        ]);

        Item::create([
            'value' => $request->input("value"),
            'type'  => ItemTypes::Khatarat,
        ]);

        return redirect()->route('khatarats');
    }
}
