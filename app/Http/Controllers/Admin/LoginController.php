<?php

namespace App\Http\Controllers\Admin;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // 
    public function login()
    {
        return view('Admin.login');
    }

    public function adminLogin(Request $request)
    {
        $userdata = $request->all();

        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::guard('admin')->attempt($request->only('email', 'password'), $request->filled('remember'))) {
            return redirect('admin/dashboard')
                ->with(['message' => 'success', 'message' => 'you are login Successfully']);
        } else {
            return redirect('admin/login')->with(['message' => 'error', 'message' => 'wrong crendtials']);
        }

        return $this->loginFailed();
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('admin/login')->with(['message'=>'success','message'=>'you are logout successfully']);
    }
    
}
