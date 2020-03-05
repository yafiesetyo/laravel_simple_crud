<?php

namespace App\Http\Controllers;

use App\login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class loginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function regist()
    {
        return view('registration');
    }

    public function regist_form(Request $req)
    {
        $id = rand(0,101010101);
        login::create([
            'admin_id'=>$id,
            'username'=>$req->uname,
            'password'=>$req->pwd,
            'address'=>$req->addr
        ]);
        return redirect('/registration');
    }

    public function login_validation(Request $req){
        $uname = $req->uname;
        $pwd = $req->pwd;
        $cek = login::where('username','=',$uname)->first();
        if($cek){
            if($pwd==$cek->password){
                Session::put('username',$cek->username);
                Session::put('login',TRUE);
                return redirect('/');
            }else{
                return redirect('/login')->with('alert','Password atau Email, Salah !');
            }
        }else{
            return redirect('/login')->with('alert','asd ria');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('/login');
    }
}
