<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChallengeController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
--------------------------------------------------------------------------
 Web Routes
--------------------------------------------------------------------------
Here is where you can register web routes for your application. These routes are loaded by the RouteServiceProvider within a group which contains the "web" middleware group. Now create something great!
*/

Route::get('/', [SessionController::class, 'index']);

# Artikel Route
Route::get('artikel', [SessionController::class, 'ar']);
Route::get('Mikroplastik:-Ancaman-Global-dan-Potensi-Bahaya-bagi-Manusia', [SessionController::class, 'ar1']);
Route::get('Paris:-Saksi-Bisu-Hujan-Mikroplastik-Pertama-Dunia', [SessionController::class, 'ar2']);
Route::get('Oxodegradable:-Solusi-atau-Hanya-Sebuah-Ilusi-dalam-Menghadapi-Krisis-Plastik?', [SessionController::class, 'ar3']);

# Tantangan Route
Route::get('/tantangan', [ChallengeController::class, 'challengeList'])->name("challenge-list");
Route::get('/tantangan-1', [ChallengeController::class, 'firstChallenge'])->name("first-challenge");
Route::post('/tantangan-1', [ChallengeController::class, 'postFirstChallenge'])->name("first-challenge.post");
Route::get('/tantangan-2', [ChallengeController::class, 'secondChallenge'])->name("second-challenge");
Route::post("/tantangan-2", [ChallengeController::class, "postSecondChallenge"])->name("second-challenge.post");
Route::get('/tantangan-3', [ChallengeController::class, 'thirdChallenge'])->name("third-challenge");
Route::post('/tantangan-3', [ChallengeController::class, 'postThirdChallenge'])->name("third-challenge.post");


Route::get('form-tantangan-pertama', [SessionController::class, 'ucelen1']);
Route::get('form-tantangan-kedua', [SessionController::class, 'ucelen2']);
Route::get('form-tantangan-ketiga', [SessionController::class, 'ucelen3']);


# Lokasi Route
Route::get('/lokasi', [SessionController::class, 'lks']);

# TnC Route
Route::get('/syarat-dan-ketentuan', [SessionController::class, 'tnc']);

# Login Route
Route::get('/masuk', [AuthController::class, 'loginView'])->name('login.get');
Route::post("/masuk", [AuthController::class, "loginForm"])->name("login.post");

# Regis Route
Route::get('/registrasi', [AuthController::class, 'registerView'])->name('register.get');

Route::post('/postsignup', [AuthController::class, 'registerForm'])->name('register.post');
Route::get('/signout', [AuthController::class, 'signOut'])->name('signout');

# User Route
Route::get("/user", [UserController::class, "user"])->name("user");
Route::post("/change-userdata", [AuthController::class, "changeUserData"])->name("change-userdata");
Route::post("/change-userpassword", [AuthController::class, "changeUserPassword"])->name("change-userpassword");

# Admin Route
// Route::get('/admin', [SessionController::class, 'admin']);
// Route::get('/admin/detail-user', [SessionController::class, 'dtl']);

Route::get('/admin', [AdminController::class, 'getUserInAdmin'])->name("admin");
Route::get('/admin-user', [AdminController::class, 'getDetailUserInAdmin'])->name("admin-user");
