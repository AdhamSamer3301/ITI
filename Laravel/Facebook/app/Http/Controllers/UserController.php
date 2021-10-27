<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;


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
        
        Auth::login($user);

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
    public function getAccount(){
        return view('account',['user'=>Auth::user()]);
    }
    public function postSaveAccount(Request $request)
    {
        $this->validate($request, [
           'first_name' => 'required|max:120'
        ]);
        //$user=User::findOrFail($request)->update(['deleted'=>1]);
        //$user = Auth::user();
        $user=User::findOrFail('id');
        
        $old_name = $user->first_name;
        $user->first_name = $request['first_name'];
        $user->update();

        $file = $request->file('image');
        $filename = $request['first_name'] . '-' . $user->id . '.jpg';
        $old_filename = $old_name . '-' . $user->id . '.jpg';
        $update = false;

        if (Storage::disk('local')->User::has($old_filename)) {
            $old_file = Storage::disk('local')->get($old_filename);
            Storage::disk('local')->put($filename, $old_file);
            $update = true;
        }
        if ($file) {
            Storage::disk('local')->put($filename, File::get($file));
        }
        if ($update && $old_filename !== $filename) {
            Storage::delete($old_filename);
        }
        
        
    }
    
    public function getUserImage($filename)
    {
        $file = Storage::disk('local')->get($filename);
        return new Response($file, 200);
    }

    }
