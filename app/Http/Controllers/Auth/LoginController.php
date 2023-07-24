<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login(Request $request){
        if($request ->isMethod('POST')){
            if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
                return redirect()->route('route_student_index');

                        
            }else{
                Session::flash('error','sai maajt khaaur');
                return redirect()->route(('route_student_login'));
            }
        }
          return view('auth.login');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('route_student_login');
    }
}
