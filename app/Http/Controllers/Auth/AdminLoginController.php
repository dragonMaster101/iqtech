<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    //construct function to assign guard
    public function __construct(){
        $this->middleware('guest:admin');
    }

    //show login function to return view
    public function showLoginForm(){
        return view('auth.admin-login');
    }

    //the login function for admins
    public function login(Request $request){

        //validate form data
        $this->validate($request, [
                'email' => 'required|email',
                'password' => 'required'
        ]);

        //attempt to log the user in
        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)){

            //if successful then redirect to their intended location

            return redirect()->intended(route('admin.dashboard'));
        }

        //if unsuccessful then redirect back to login with form data
        return redirect()->back()->withInput($request->only('email','remember'));
    }
}
