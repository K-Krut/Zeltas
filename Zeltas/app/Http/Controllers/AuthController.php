<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPassword;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');

        return redirect(route('home'));
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function logout()
    {
        auth('web')->logout();

        return redirect(route('home'));
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email|string|exists:users,email', //'email' => 'required|email|string|exists:users,email',
            'password' => 'required'
        ]);

        return auth('web')->attempt($data) ? redirect(route('home')) :
            redirect(route('login'))->withErrors(['email' => 'Invalid data for login']);

    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'username' => 'required|string',
            'email' => 'required|email|string|unique:users,email',
            'password' => 'required|confirmed'
        ]);

        $user = User::create([
            'name' => $data['username'],
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ]);

        if ($user) {
            auth('web')->login($user);
        }

        return redirect(route('home'));
    }

    public function showForgotForm()
    {
        return view("auth.forgot");
    }

    public function forgot(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email|string|exists:users',
        ]);

        $user = User::where(["email" => $data["email"]])->first();

        $password = uniqid();

        $user->password = bcrypt($password);
        $user->save();

        Mail::to($user)->send(new ForgotPassword($password));

        return redirect(route("login"));
    }
}
//Mail::send( ['html' => 'emails.newinvoice'], ['text' => $emailtext],
