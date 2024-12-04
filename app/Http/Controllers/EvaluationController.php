<?php

namespace App\Http\Controllers;

use App\Enums\ItemTypes;
use App\Models\Item;
use App\Models\Worksheet;
use App\Models\WorksheetEducation;
use App\Models\WorksheetEquipment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EvaluationController extends Controller
{
    public function register(): View {
        $khatarats = Item::where('type',ItemTypes::Khatarat)->get();
        $educations = Item::where('type',ItemTypes::Education)->get();
        $equipments = Item::where('type',ItemTypes::Equipment)->get();

        return view("evaluation.register", [
            'khatarats'  => $khatarats,
            "educations" => $educations,
            "equipments" => $equipments,
        ]);
    }

    public function evaluationDefine(Request $request): RedirectResponse
    {
        $request->validate([
            'vahed'                 => ['required'],
            'shoghl'                => ['required'],
            'name'                  => ['required'],
            'sath_shghl'            => ['required'],
            'image'                 => ['required'],
            'khatarat_id'           => ['required'],
            'payamadha'             => ['required'],
            'firstRisk_num_shedat'  => ['required','numeric'],
            'firstRisk_num_ehtemal' => ['required','numeric'],
            'firstRisk_num_risk'    => ['required','numeric'],
            'controls'              => ['required'],
            'sathRisk_num_shedat'   => ['required','numeric'],
            'sathRisk_num_ehtemal'  => ['required','numeric'],
            'sathRisk_num_risk'     => ['required','numeric'],
            'rahkar'                => ['required'],
            'masool_eghdam'         => ['required'],
        ]);

        $filename = "";
        $image = $request->file('image');
        if($image != null)
        {
            $filename = time(). '.' . $image->getClientOriginalName();
            $destinationPath = base_path('/public/images/');
            $image->move($destinationPath , $filename);
        }

        $worksheet = Worksheet::create([
            'vahed'                 => $request->input("vahed"),
            'shoghl'                => $request->input("shoghl"),
            'name'                  => $request->input("name"),
            'sath_shghl'            => $request->input("sath_shghl"),
            'image'                 => $filename,
            'khatarat_id'           => $request->input("khatarat_id"),
            'payamadha'             => $request->input("payamadha"),
            'firstRisk_num_shedat'  => $request->input("firstRisk_num_shedat"),
            'firstRisk_num_ehtemal' => $request->input("firstRisk_num_ehtemal"),
            'firstRisk_num_risk'    => $request->input("firstRisk_num_risk"),
            'controls'              => $request->input("controls"),
            'sathRisk_num_shedat'   => $request->input("sathRisk_num_shedat"),
            'sathRisk_num_ehtemal'  => $request->input("sathRisk_num_ehtemal"),
            'sathRisk_num_risk'     => $request->input("sathRisk_num_risk"),
            'rahkar'                => $request->input("rahkar"),
            'masool_eghdam'         => $request->input("masool_eghdam"),
        ]);

        if($request->input('education') != null)
            $worksheet
                ->educations()
                ->attach(Item::find($request->input('education')));

        if($request->input('equipment') != null)
            $worksheet
                ->equipments()
                ->attach(Item::find($request->input('equipment')));

        return redirect()->route('home');
    }
}
