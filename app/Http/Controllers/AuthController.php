<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function login()
    {
        return view('users.login');
    }

    public function register()
    {
        return view('users.register');
    }

    public function registerVerify(Request $request)
    {
        $registro = new User();

        $registro->name = $request->name;
        $registro->last_name = $request->last_name;
        $registro->second_name = $request->second_name;
        $registro->email = $request->email;
        $registro->password = bcrypt($request->password);

        $registro->save();

        return view('users.profile');
    }

    public function loginVerify(Request $request)
    {

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return view('users.profile');
        }else{
            return redirect()->route('login');
        }

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function profile()
    {
        Auth::logout();
        return redirect()->route('profile');
    }
}
