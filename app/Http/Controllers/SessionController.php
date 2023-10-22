<?php

namespace App\Http\Controllers;

use App\Models\UploadedFile;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\usr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    // HALAMAN
    // home
    function index()
    {
        return view("halaman/home");
    }
    // index artikel
    function ar()
    {
        return view("halaman/artikel");
    }
    // index artikel1
    function ar1()
    {
        return view("halaman/artikel-1");
    }
    // index artikel2
    function ar2()
    {
        return view("halaman/artikel-2");
    }
    // index artikel3
    function ar3()
    {
        return view("halaman/artikel-3");
    }

    // index tantangan
    function celen()
    {
        return view("halaman/tantangan");
    }
    // index tantangan1
    function celen1()
    {
        return view("halaman/tantangan-1");
    }
    function ucelen1()
    {
        return view("halaman/utantangan-1");
    }

    // index tantangan2
    function celen2()
    {
        return view("halaman/tantangan-2");
    }
    function ucelen2()
    {
        return view("halaman/utantangan-2");
    }

    // index tantangan3
    function celen3()
    {
        return view("halaman/tantangan-3");
    }
    function ucelen3()
    {
        return view("halaman/utantangan-3");
    }

    // index TnC
    function tnc()
    {
        return view("halaman/tnc");
    }
    // index lokasi
    function lks()
    {
        return view("halaman/lokasi");
    }

    // fungsi login
    function login(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('name', 'email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                ->with('message', 'Signed in!');
        }
        return redirect('sesi/login')->with('message', 'Login details are not valid!');
    }

    // form regis
    function reg()
    {
        return view("sesi/regis");
    }

    public function regsave(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        $data = $request->all();
        $check = $this->create($data);
        return redirect("dashboard");
    }
    public function create(array $data)
    {
        return usr::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }
    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        }
        return redirect('sesi/login');
    }

    public function signOut()
    {
        Session::flush();
        Auth::logout();
        return redirect('sesi/login');
    }

    //ADMIN
    // index admin
    function admin()
    {
        $userFileCounts = UploadedFile::select('user.nama', 'user.email', 'user.created_at')
            ->selectRaw('COUNT(filename) * 50 as file_count')
            ->join('user', 'uploaded_files.user_id', '=', 'user.id')
            ->groupBy('user_id')
            ->paginate(2);
        return view("admin/admin")->with('data', $userFileCounts);
    }

    // detail user di admin
    function dtl()
    {
        return view("admin.user_admin");
    }

    // index user
    function user()
    {
        return view("admin/user");
    }

    // autentifikasi email pwd dr index
}
