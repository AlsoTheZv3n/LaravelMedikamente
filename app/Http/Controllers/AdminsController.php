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
        $user = User::find($id);
        return view('users.edit')->with('user', $user);

    }

    public function save(Request $request, $id){
        $user = User::find($id);
        $user->username = $request->username;
        $user->role = $request->role;
        $user->save();
        return redirect('/admins')->with('success', 'user Saved');

    }

    public function destroy($id){
        $user = User::find($id);
        $user->delete();
        return redirect('/admins')->with('success', 'user Delete');

    }


}
