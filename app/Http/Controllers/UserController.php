<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        foreach ($users as $user){
            $telefono = $user->phone()->first();
            $user->telefono = $telefono->contact_phone;
        }
        return view('users', ['users' => $users]);
    }
}
