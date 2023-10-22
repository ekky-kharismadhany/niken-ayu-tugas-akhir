<?php

namespace App\Http\Controllers;

use App\Models\UploadedFile;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChallengeController extends Controller
{

    protected $successMessage = "Foto tantangan telah tersimpan";
    protected $failedMessage = "Foto tantangan gagal tersimpan";

    public function challengeList(): View
    {
        return view("halaman.tantangan");
    }

    public function firstChallenge(): View
    {
        if (Auth::check()) {
            return view("halaman.utantangan-1");
        }
        return view("sesi.login");
    }

    private function storeFile(Request $request): bool
    {
        $path = $request->file("challengeItem1")->store("challengeItems");
        if (!$path) {
            return false;
        }
        UploadedFile::create([
            "filename" => $path,
            "user_id" => $request->user_id,
"challenge_type" => $request->challengeType,
        ]);
        $path = $request->file("challengeItem2")->store("challengeItems");
        if (!$path) {
            return false;
        }
        UploadedFile::create([
            "filename" => $path,
            "user_id" => $request->user_id,
"challenge_type" => $request->challengeType,
        ]);
        $path = $request->file("challengeItem3")->store("challengeItems");
        if (!$path) {
            return false;
        }
        UploadedFile::create([
            "filename" => $path,
            "user_id" => $request->user_id,
"challenge_type" => $request->challengeType,
        ]);
        return true;
    }

    public function postFirstChallenge(Request $request): View
    {
        if (!$this->storeFile($request)) {
            session()->flash("failed", $this->failedMessage);
            return view("halaman.utantangan-1");
        }
        session()->flash("success", $this->successMessage);
        return view("halaman.utantangan-1");
    }

    public function secondChallenge(): View
    {
        if (Auth::check()) {
            return view("halaman.utantangan-2");
        }
        return view("sesi.login");
    }

    public function postSecondChallenge(Request $request): View
    {
        if (!$this->storeFile($request)) {
            session()->flash("failed", $this->failedMessage);
            return view("halaman.utantangan-2");
        }
        session()->flash("success", $this->successMessage);
        return view("halaman.utantangan-2");
    }

    public function thirdChallenge(): View
    {
        if (Auth::check()) {
            return view("halaman.utantangan-3");
        }
        return view("sesi.login");
    }

    public function postThirdChallenge(Request $request): View
    {
        $path = $request->file("challengeItem1")->store("challengeItems");
        if (!$path) {
            session()->flash("failed", $this->failedMessage);
            return view("halaman.utantangan-3");
        }
        UploadedFile::create([
            "filename" => $path,
            "user_id" => $request->user_id,
"challenge_type" => $request->challengeType,
        ]);
        $path = $request->file("challengeItem2")->store("challengeItems");
        if (!$path) {
            session()->flash("failed", "failed to save challenge image");
            return view("halaman.utantangan-3");
        }
        UploadedFile::create([
            "filename" => $path,
            "user_id" => $request->user_id,
"challenge_type" => $request->challengeType,
        ]);
        session()->flash("success", $this->successMessage);
        return view("halaman.utantangan-3");
    }
}
