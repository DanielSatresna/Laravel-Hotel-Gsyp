<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Session;

class akunController extends Controller
{
    public function addData(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'nik' => 'required',
            'role' => 'required',
            'tgllahir' => 'required',
        ],
        [
            'name' => 'Nama HARAP DI ISI',
            'email' => 'Email HARAP DI ISI',
            'password' => 'Password HARAP DI ISI',
            'nik' => 'NIK HARAP DI ISI',
            'role' => 'TOLONG PILIH ROLE',
            'tgllahir' => 'Tanggal Lahir HARAP DI ISI',
        ]);

        $data=[
            'name'=>$request->name,
            'image'=>$request->image,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'role'=>$request->role,
            'nik'=>$request->nik,
            'tgllahir'=>$request->tgllahir
        ];

        if($data){
            User::create($data);
            return redirect('/login');
        }
    }

    public function index(){
        if(Auth::check()){
            return redirect('/');
        }else
        return view('akun.login');
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
