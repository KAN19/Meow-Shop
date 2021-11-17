<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showRegister() {
        return view('admin.login.register');
    } 

    public function storeRegister(Request $request) {
        $user = new User(); 
        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
    
        $user->save(); 

        return redirect()->back(); 
    } 

    public function showLogin() {
        return view('admin.login.index');
    } 

    public function login(Request $request) {
        if (Auth::attempt(['name' => $request->username, 'password' => $request->password])) {
            echo 'login ok'; 
        } else {
            echo 'login ko thanh cong'; 
        }
    } 

    public function logout()
    {
        Auth::logout(); 
    }
}