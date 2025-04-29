<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;


class UserController extends Controller
{
    use AuthenticatesUsers;

    public function login()
    {
        return view('login');
    }

    public function doLogin(Request $request)
    {
        $credential = $request->only('email','password');

        if (auth()->attempt($credential)) {
            return redirect("/posts");
        } else {
            return redirect()->route("login")->with("error", "Email dan password tidak ditemukan di sistem");
        }
    }

    public function doLogout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login.index')->with('success', 'Anda Berhasil Logout');
    }

    public function createSample()
    {
    User::create([
        'name' => 'Administrator',
        'email' => 'iniadmin@admin.com',
        'password' => bcrypt('12345'),
    ]);

    echo "User berhasil ditambahkan";
    }
}
