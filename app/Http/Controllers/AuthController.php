<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
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

    public function loginForm(Request $request): View | RedirectResponse
    {
        $request->validate([
            "email" => "email:rfc,dns"
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            if (Auth::user()->email === "admin@beridampak.my.id") {
                return redirect(route("admin"));
            }
            return view("halaman.tantangan");
        }
        session()->flash("error", "Pastikan akun telah terdaftar dan data yang dimasukkan telah sesuai");
        return view("sesi.login");
    }

    public function registerForm(Request $request)
    {
        $request->validate([
            "email" => "email:rfc,dns"
        ]);
        $user = User::where("email", $request->email)->first();
        if ($user) {
            session()->flash("sameEmail", "email telah terdaftar");
            return view("sesi.regis");
        }
        User::create([
            "nama" => $request->name,
            "alamat" => $request->address,
            "no_hp" => $request->phone,
            "gender" => $request->gender,
            "email" => $request->email,
            "password" => Hash::make($request->password),
        ]);
        session()->flash("registerSuccess", "Registrasi sukses, silahkan masuk");
        return redirect(route("login.get"));
    }

    public function changeUserData(Request $request)
    {
        $request->validate([
            "email" => "email:rfc,dns"
        ]);
        if ($request->password != "") {
            if (!$this->changeUserPasswordInUserPage($request)) {
                session()->flash("error", "Perubahan sandi gagal. Tolong ulangi");
                return redirect(route("user"));
            }
            Auth::logout();
            session()->flash("registerSuccess", "Perubahan password sukses. Silakan masuk");
            return redirect(route("login.get"));
        }
        $user = User::find($request->user_id);
        $user->nama = $request->name;
        $user->email = $request->email;
        $user->alamat = $request->alamat;
        $user->gender = $request->gender;
        $user->no_hp = $request->phone;

        $user->save();
        session()->flash("success", "Perubahan data berhasil");
        return redirect(route("user"));
    }

    private function changeUserPasswordInUserPage(Request $request) : bool {
        if ($request->password != $request->passwordConfirmation) {
            return false;
        }
        $newPassword = Hash::make($request->password);
        $user = User::find($request->user_id);
        if (!$user) {
            return false;
        }
        $user = User::find($request->user_id);
        $user->nama = $request->name;
        $user->email = $request->email;
        $user->alamat = $request->alamat;
        $user->gender = $request->gender;
        $user->no_hp = $request->phone;
        $user->password = $newPassword;
        $user->save();
        return true;
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

    public function changeUserPasswordByAdmin(Request $request) : RedirectResponse
    {
        if (!Auth::check()) {
            abort(Response::HTTP_FORBIDDEN, "Pengguna belum login");
        }
        if (Auth::user()->email != "admin@beridampak.my.id") {
            abort(Response::HTTP_UNAUTHORIZED, "Pengguna bukan admin");
        }
        $password = Hash::make($request->password);
        $user = User::find($request->user_id);
        $user->password = $password;
        $user->save();
        session()->flash("success", "Kata sandi " . $user->nama . " berhasil diubah");
        return redirect(route('admin-user', ['user_id' => $user->id]));
    }

    public function signOut(): RedirectResponse
    {
        Auth::logout();

        return redirect(route("challenge-list"));
    }
}
