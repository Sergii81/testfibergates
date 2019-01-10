<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function getUsers(){    // вывод всех сотрудников по 10 на страницу
    	$all = User::paginate(10);
    	return view('users', ['all'=>$all]);
    }

    public function addForm(){   // форма для добавления сотрудников
        return view('addForm');
    }

    public function addUser(Request $request){   // непосредственно добавление в БД
    	$user = new User;
    	$user->name = $request->name;
    	$user->surname = $request->surname;
    	$user->age = $request->age;
    	$user->save();       
       	return redirect('getusers');
    }

    public function updateForm($id){    // форма для редактирования данных сотрудников
    	$user = User::find($id);
    	return view('updateForm', ['user'=>$user]);	
    }

    public function update(Request $request, $id){     // редактирование в БД
    	$user = User::find($id);
    	$user->name = $request->name;
    	$user->surname = $request->surname;
    	$user->age = $request->age;
    	$user->save();
    	return redirect('getusers');
    }

    public function delete($id){         // удаление 
        $user = User::find($id);
        $user->delete($id);
        return redirect('getusers');
    }
}
