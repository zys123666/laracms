<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class LoginController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function login(Request $request){
        $username = $request->input('username');
        $password = $request->input('password');
        $users = User::where('name', $username)->first();
        if (empty($users)){
            return view('admin.index')->with('info','账号或密码错误');
        }
        $check = Hash::check($password,$users->password);
        if ($check){
            session(['uid'=>$users->id]);
            session(['user'=>$users->name]);
            return redirect('/admin/main');
        }else{
            return view('admin.index')->with('info','账号或密码错误');
        }
    }
}
