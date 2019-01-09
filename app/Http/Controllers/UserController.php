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
}
