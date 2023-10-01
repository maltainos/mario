<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function show(){
        return view('login');
    }

    public function login(Request $request){

        $credencials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($credencials)){
            return redirect()->route('dashboard')->with('success', 'Sessao iniciada com sucesso');
        }

        return back()->with('error', 'Credencias invalidas...');
    }

    public function logout(){
        Auth::logout();

        return redirect()->route('search')->with('error', 'Logout has bean set successfully');
    }
}
