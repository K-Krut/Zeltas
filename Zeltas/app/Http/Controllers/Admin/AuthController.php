<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.auth.login');

        //return redirect(route('home'));
    }
    public function index_red()
    {
        return view('admin.index');

        //return redirect(route('home'));
    }


    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email|string', //'email' => 'required|email|string|exists:users,email',
            'password' => 'required'
        ]);

        return auth('admin')->attempt($data) ? redirect(route('admin.index')) :
            redirect(route('admin.login'))->withErrors(['email' => 'Invalid data for login']);

    }

    public function logout()
    {
        auth('admin')->logout();

        return redirect(route('home'));
    }
}
