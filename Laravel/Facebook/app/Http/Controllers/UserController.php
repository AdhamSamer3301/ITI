<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function postsignup(Request $request)
    {
        $this->validate($request,[
            'email'=>'required|email|unique:users',
            'first_name'=>'required|max:20',
            'password'=>'required|min:3',

        ]);

        $email=$request['email'];
        $first_name=$request['first_name'];
        $password=bcrypt($request['password']);


        $user=new User();
        $user->email=$email;
        $user->name=$first_name;
        $user->password=$password;



        $user->save();
        return redirect()->route('dashboard');


    }


    public function postsignin(Request $request)
    {

        $this->validate($request,[
            'email'=>'required|email',

            'password'=>'required|min:3',

        ]);

        if(Auth::attempt(['email' => $request['email'],'password' => $request['password'] ]) )
        {
            return redirect()->route('dashboard');
        }
        return redirect()->back();

    }

    public function getLogout(){

        Auth::logout();
        return redirect()->route('home');
    }
}
