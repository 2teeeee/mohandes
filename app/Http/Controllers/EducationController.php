<?php

namespace App\Http\Controllers;

use App\Enums\ItemTypes;
use App\Models\Item;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EducationController extends Controller
{
    public function list(): View {
        $educations = Item::where("type", ItemTypes::Education)->get();

        return view("education.list", [
            'educations'  => $educations,
        ]);
    }

    public function create(): View {
        return view("education.create");
    }

    public function save(Request $request): RedirectResponse {
        $request->validate([
            'value' => ['required'],
        ]);

        Item::create([
            'value' => $request->input("value"),
            'type'  => ItemTypes::Education,
        ]);

        return redirect()->route('educations');
    }
}
