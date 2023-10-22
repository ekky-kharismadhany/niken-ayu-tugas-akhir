<?php

namespace App\Http\Controllers;

use App\Models\UploadedFile;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function user(): View
    {
        if (!Auth::check()) {
            return view("halaman.tantangan");
        }
        $user = DB::table("user")->where("id", "=", Auth::user()->id)->first("nama");
        $userName = $this->getUserName($user->nama);
        $point = $this->calculatePoint();
$images = $this->getLastThreeImage();
        return view("admin/user", [
            "userPoint" => $point,
            "userName" => $userName,
"images" => $images,
        ]);
    }

    private function getUserName(string $nama): string
    {
        $stringParts = explode(" ", $nama);
        if (count($stringParts) >= 2) {
            return $stringParts[0] . " " . $stringParts[1];
        }
        return $nama;
    }

    private function getLastThreeImage()
    {
        return DB::table("uploaded_files")->
        where("user_id", "=", Auth::user()->id)->limit(3)->
        orderBy("created_at", "desc")->get(["filename", "challenge_type"]);
    }

    private function calculatePoint(): int
    {
        return DB::table("uploaded_files")->where("user_id", Auth::user()->id)->count() * 50;
    }
}
