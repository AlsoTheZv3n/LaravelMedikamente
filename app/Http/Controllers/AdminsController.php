<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminsController extends Controller
{
    public function index(){

        return view ('admin', [
    
            'user' => User::all(),
    
        ]);
        
    }

    public function editadmin($id){
        $post = User::find($id);
        return view('posts.edit')->with('post', $post);

    }

    public function save(Request $request, $id){
        $post = User::find($id);
        $post->username = $request->username;
        $post->role = $request->role;
        $post->save();
        return redirect('/admins')->with('success', 'Post Saved');

    }

    public function destroy($id){
        $post = User::find($id);
        $post->delete();
        return redirect('/admins')->with('success', 'Post Delete');

    }


}
