<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Validator;
use App\Models\User;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function userLogin(Request $request)
    {
        $data = $request->all();
        $v = Validator::make($data,
        [
           'email'=>'required',
           'password'=>'required|string|min:6',
        ]);

        if(Auth::guard('user')->attempt($request->only('email','password'),$request->filled('remember')))
        {
            return redirect('category/list')->with(['message' => 'success', 'message' => 'you are login successfully']);
        }
        else {
            return redirect('user/login')->with(['message'=>'error','message'=>'Wrong credentials']);
        }

    }
    public function logout()
    {
        Auth::guard('user')->logout();
        return redirect('user/login')->with(['message' => 'success', 'message' => 'yo are  logout successfully']);
    }
}
