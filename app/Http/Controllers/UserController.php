<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function show($name){
        //$user = \DB::table('users')->where('name',$name)->first();
        // Consulta con modelo eloquent
        $user = User::where('name', $name)->firstOrfail();
        return view('users',['user'=>$user]);
    }
}
