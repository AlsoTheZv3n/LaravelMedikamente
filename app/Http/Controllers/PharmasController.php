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

    public function edit(int $id){
        $pharma = Pharma::find($id);

        return view('pharmaEdit', [
            'pharma' => $pharma,
        ]);

    }

    public function update(int $id, Request $request) {
        $pharma = Pharma::find($id);

        $name = $request->name;

        $pharma->name = $name;

        $pharma->save();
        
        return redirect('/pharma');
    }

    public function destroy($id){
        $pharma = Pharma::find($id);
        $pharma->delete();
        return redirect('/pharma');

    }

    
}
