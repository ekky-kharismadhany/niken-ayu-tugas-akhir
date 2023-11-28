<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

use function PHPUnit\Framework\returnSelf;

//SESI
// form login
class AuthController extends Controller
{
    public function loginView(): View
    {
        return view("sesi.login");
    }

    public function registerView(): View
    {
        return view("sesi.regis");
    }

    public function loginForm(Request $request): View
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return view("halaman.tantangan");
        }
        return view("sesi.login");
    }

    public function registerForm(Request $request): RedirectResponse
    {
        User::create([
            "nama" => $request->name,
            "alamat" => $request->address,
            "no_hp" => $request->phone,
            "gender" => $request->gender,
            "email" => $request->email,
            "password" => Hash::make($request->password),
        ]);
        return redirect(route("login.get"));
    }

    public function changeUserData(Request $request)
    {
        $password = Hash::make($request->password);
        $user = User::find($request->user_id);
        $user->nama = $request->name;
        $user->email = $request->email;
        $user->alamat = $request->alamat;
        $user->gender = $request->gender;
        $user->no_hp = $request->phone;

        $user->password = $password;

        $user->save();

        Auth::logout();
        return redirect(route("login.get"));
    }

    public function changeUserPassword(Request $request)
    {
        $password = Hash::make($request->password);
        $user = User::find($request->user_id);

        $user->password = $password;

        $user->save();

        Auth::logout();
        return redirect(route("login.get"));
    }

    public function signOut(): RedirectResponse
    {
        Auth::logout();

        return redirect(route("challenge-list"));
    }
}
