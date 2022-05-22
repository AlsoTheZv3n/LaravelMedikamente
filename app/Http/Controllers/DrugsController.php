<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drug;
use App\Models\Effect;


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

}
