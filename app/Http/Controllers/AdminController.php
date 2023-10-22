<?php

namespace App\Http\Controllers;

use App\Models\UploadedFile;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function getUserInAdmin(Request $request): View
    {
        $userFileCounts = User::select('user.id', 'user.nama', 'user.email', 'user.created_at')
        ->leftJoin('uploaded_files as uf', 'user.id', '=', 'uf.user_id')
        ->selectRaw('IFNULL(COUNT(uf.filename) * 50, 0) as file_count')
        ->groupBy('user.id', 'user.nama', 'user.email', 'user.created_at')
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
