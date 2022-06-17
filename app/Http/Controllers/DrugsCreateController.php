<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DrugsCreateController extends Controller
{

    public function create(Request $request) {
    
        $drug = new Drug();

        $name = $request->name;
        $price = $request->price;

        $drug->name = $name;
        $drug->price = $price;

        $drug->user_id = auth()->user()->id;
        $drug->pharma_id = $pharma->id;
        
        $drug->save();

        return redirect('/');
    }
}
