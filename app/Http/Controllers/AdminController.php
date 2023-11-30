<?php

namespace App\Http\Controllers;

use App\Models\UploadedFile;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function getUserInAdmin(Request $request): View | RedirectResponse
    {
        if (Auth::user() === null) {
            abort(Response::HTTP_FORBIDDEN, "Pengguna Belum Login");
        }
        if (Auth::user()->email !== "admin@beridampak.my.id") {
            abort(Response::HTTP_FORBIDDEN, "Pengguna Bukan Admin");
        }
        $userFileCounts = User::select('user.id', 'user.nama', 'user.email', 'user.created_at')
        ->leftJoin('uploaded_files as uf', 'user.id', '=', 'uf.user_id')
        ->selectRaw('IFNULL(COUNT(uf.filename) * 50, 0) as file_count')
        ->groupBy('user.id', 'user.nama', 'user.email')
        ->paginate(10);
        return view("admin.admin")->with('data', $userFileCounts);
    }

    public function getDetailUserInAdmin(): View
    {
        $userId = request("user_id");
        $user = DB::table("user")->where("id", "=", $userId)->first();
        return view("admin.user_admin")->with('data', $user);
    }
}
