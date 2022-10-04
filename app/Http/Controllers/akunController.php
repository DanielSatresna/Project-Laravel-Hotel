<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Session;

class akunController extends Controller
{
    public function Register(Request $request){
        $request -> validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'nik' => 'required',
            'role' => 'required',
            'tgllhr' => 'required',
        ],
    
        [
            'name' => 'Nama HARAP DI ISI',
            'email' => 'Email HARAP DI ISI',
            'password' => 'Password HARAP DI ISI',
            'nik' => 'NIK HARAP DI ISI',
            'role' => 'TOLONF PILIH ROLE',
            'tgllhr' => 'Tanggal Lahir HARAP DI ISI',
        ]
    );

    $data=User::create([
        'name'=> $request->name,
        'email'=> $request->email,
        'password'=> Hash::make ($request->password),
        'nik'=> $request->nik,
        'role'=> $request->role,
        'tgllhr'=>$request->tgllhr,
    ]);
    return redirect('/login');

    }


    public function index(){
        if(Auth::check()){
            return redirect('/');
        }else
        return view('Akun.login');
    }

    public function Login(Request $request){
        $credential = $request -> only('email', 'password');

        if(Auth::attempt($credential)){
            return redirect()->intended('/');
        }else{
            return redirect('/login');
        }
    }

    public function ubahData(Request $request){
        $request -> validate([
            'name' => 'required',
            'email' => 'required',
            'nik' => 'required',
            'tgllhr' => 'required',
        ],
    
        [
            'name' => 'Nama HARAP DI ISI',
            'email' => 'Email HARAP DI ISI',
            'nik' => 'NIK HARAP DI ISI',
            'tgllhr' => 'Tanggal Lahir HARAP DI ISI',
        ]);

        $update=Auth::user();
        $update->name=$request->name;
        $update->email=$request->email;
        $update->nik=$request->nik;
        $update->tgllhr=$request->tgllhr;
        $update->save();
        
        return redirect('/profile');
    }


   
}
