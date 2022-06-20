<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drug;

class DrugsCreateController extends Controller
{

    public function create(Request $request) {
    
        $drug = new Drug();

        $name = $request->name;
        $price = $request->price;
        $pharma = $request->pharmaid;

        $drug->name = $name;
        $drug->price = $price;
        $drug->user_id = auth()->user()->id;
        $drug->pharma_id = $pharma;
        
        $drug->save();

        return redirect('/');
    }
}
