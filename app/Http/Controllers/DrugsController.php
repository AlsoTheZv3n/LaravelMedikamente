<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drug;
use App\Models\Effect;
use App\Models\Pharma;


class DrugsController extends Controller
{
    
    public function index(){

        return view ('drug', [
            'Drugs' => Drug::all(),
        ]);
        
    }

    public function view(int $id){

        $drugs = Drug::find($id);
        $effects = Effect::where('drug_id', $id)->get();

        return view ('drugDetail', [
            'drugs' => $drugs,
            'effects' => $effects,
        ]);
        
    }

    public function edit(int $id) {
        $drug = Drug::find($id);

        return view('drugEdit', [
            'drug' => $drug
        ]);
    }

    public function update(Request $request, int $id) {
        $drug = Drug::find($id);

        $name = $request->name;
        $price = $request->price;

        $drug->name = $name;
        $drug->price = $price;

        $drug->save();

        return redirect('/');
    }


    public function create(Request $request) {
    
        $drug = new Drug();

        $name = $request->name;
        $price = $request->price;

        $drug->name = $name;
        $drug->price = $price;

        $drug->user_id = auth()->user()->id;
        $drug->pharma_id = $pharma->id;
        $drug->pharma_id = $request->pharma;
        
        $drug->save();

        return redirect('/');
    }


}
