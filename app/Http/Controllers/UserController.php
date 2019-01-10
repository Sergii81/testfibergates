<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function getUsers(){
    	$all = User::all();
    	return view('users', ['all'=>$all]);
    }

    public function addForm(){
        return view('addForm');
    }

    public function addUser(Request $request){  
    	$user = new User;
    	$user->name = $request->name;
    	$user->surname = $request->surname;
    	$user->age = $request->age;
    	$user->save();       
       	return redirect('getusers');
    }

    public function updateForm($id){
    	$user = User::find($id);
    	return view('updateForm', ['user'=>$user]);	
    }

    public function update(Request $request, $id){    
    	$user = User::find($id);
    	$user->name = $request->name;
    	$user->surname = $request->surname;
    	$user->age = $request->age;
    	$user->save();
    	return redirect('getusers');
    }

    public function delete($id){         
        $user = User::find($id);
        $user->delete($id);
        return redirect('getusers');
    }
}
