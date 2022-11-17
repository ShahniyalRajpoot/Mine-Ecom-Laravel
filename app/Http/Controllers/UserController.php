<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function login(Request $req){
        $user= Users::where(['email'=> $req->email])->first();
        if(!empty($user) && Hash::check($req->password, $user->password)==1){
            $req->session()->put('user',$user);
            return redirect('/');
        }else{
         return "UserName Or Password Is Wrong";
        }
    }
}
