<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EffectsController extends Controller
{
    public function index(){

        return view ('effect', [
            'Effects' => Effect::all(),
        ]);
        
    }
}
