<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pharma;

class PharmasController extends Controller
{
    
    public function index(){

        return view ('pharma', [
    
            'Pharma' => Pharma::all(),
    
        ]);
        
    }

    
}
