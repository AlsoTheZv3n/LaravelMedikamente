<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drug;

class DrugsController extends Controller
{
    
    public function index(){

        return view ('drug', [

            'Drugs' => Drug::all(),

        ]);
        
    }

}
