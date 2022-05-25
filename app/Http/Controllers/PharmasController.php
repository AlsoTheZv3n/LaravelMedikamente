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

    public function edit($id){
        $post = POST::find($id);
        return view('posts.edit')->with('post', $post);

    }

    public function destroy($id){
        $post = POST::find($id);
        $post->delete();
        return redirect('/admins')->with('success', 'Post Updated');

    }

    
}
