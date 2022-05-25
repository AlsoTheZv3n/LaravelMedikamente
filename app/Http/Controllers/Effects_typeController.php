<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Effects_typeController extends Controller
{
    public function index(){

        return view ('Effects_type', [
            'Effects_type' => Effects_type::all(),
        ]);
        
    }
}
