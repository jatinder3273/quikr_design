<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
   public function create()
   {
       return view('auth.register');
   }
   public function store(Request $request)
   {
        $data = $request->all();
        //    echo "<pre>";
        //    print_r($data);
        //    die;
        $v = Validator::make($data,
        [
            'name'=>'required|string|min:0|max:15',
            'email'=>'required|email|unique::user',
            'password'=>'required|string|min:6|confirmed',
            'password_confirmation'=>'required',
        ]);

        $user =new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password =Hash::make($data['password']);
        if($user->save())
        {
            return redirect('user/login')->with(['message'=>'success', 'message'=>'Register Succesfully']);
        }

        else{
            return redirect()->back()->with(['message'=>'error','message'=>'you are not register successfully']);
        }
    }
   
}
