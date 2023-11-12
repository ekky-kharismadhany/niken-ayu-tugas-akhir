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
    protected $incompleteMessage = "Mohon masukkan seluruh gambar untuk menyelesaikan tantangan";

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
        if (!$this->isUploadedMessageValid($request, 3)) {
            return view("halaman.utantangan-1")->with("failed", $this->incompleteMessage);
        }
        if (!$this->storeFile($request)) {
            return view("halaman.utantangan-1")->with("failed", $this->failedMessage);
        }
        return view("halaman.utantangan-1")->with("success", $this->successMessage);
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
        if (!$this->isUploadedMessageValid($request, 3)) {
            return view("halaman.utantangan-2")->with("failed", $this->incompleteMessage);
        }
        if (!$this->storeFile($request)) {
            return view("halaman.utantangan-2")->with("failed", $this->failedMessage);
        }
        return view("halaman.utantangan-2")->with("success", $this->successMessage);
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
        if (!$this->isUploadedMessageValid($request, 2)) {
            return view("halaman.utantangan-3")->with("failed", $this->incompleteMessage);
        }
        $path = $request->file("challengeItem1")->store("challengeItems");
        if (!$path) {
            return view("halaman.utantangan-3")->with("failed", $this->failedMessage);
        }
        UploadedFile::create([
            "filename" => $path,
            "user_id" => $request->user_id,
            "challenge_type" => $request->challengeType,
        ]);
        $path = $request->file("challengeItem2")->store("challengeItems");
        if (!$path) {
            return view("halaman.utantangan-3")->with("failed", $this->failedMessage);;
        }
        UploadedFile::create([
            "filename" => $path,
            "user_id" => $request->user_id,
            "challenge_type" => $request->challengeType,
        ]);
        return view("halaman.utantangan-3")->with("success", $this->successMessage);
    }

    protected function isUploadedMessageValid(Request $request, int $expectedNumberOfFile) : bool {
        if(count($request->files) < $expectedNumberOfFile) {
            return false;
        }
        return true;
    }
}
