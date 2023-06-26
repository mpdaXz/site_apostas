<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }
    public function store(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5'
        ],['email.required'=>'Insira um email', 'email.email'=>'Insira um email valido',
        'password.required'=>'Insira uma senha','password.min'=>'A senha deve conter 5 caracteres']);
        $credentials=$request->only('email','password');
        $authenticated = Auth::attempt([$credentials]);
        if(!$authenticated){
            return redirect()->route('login.index')->withErrors(['error'=>'Email ou senha invalidos']);
        }
    }
    public function destroy(){
        var_dump('login');
    }
}
