<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function login() {
        return view('login');
    }

    public function loginProses(Request $request) {
        $data = [
            'name'=>$request->input('name'),
            'password'=>$request->input('password')
        ];

        if (Auth::attempt($data)) {
            return redirect('/');
        } else {
            return redirect('/');
        }
    }
}
