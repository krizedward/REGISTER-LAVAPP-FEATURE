<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterNewAccountController;
use App\Http\Controllers\TopicLearnController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return redirect('login');
});

Route::get('/materi', function () {
    return view('users.materi');
});

Auth::routes();

Route::middleware(['role:admin'])->group(function () {
    // Tempatkan rute yang hanya bisa diakses oleh admin di sini
});

Route::middleware(['role:user'])->group(function () {
    // Tempatkan rute yang hanya bisa diakses oleh admin di sini
});

Route::middleware(['role:super_admin'])->group(function () {
    // Tempatkan rute yang hanya bisa diakses oleh admin di sini
});

Route::get('/materi', function () { return view('users.materi'); });
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/topic', function () {
    return view('topik.index');
});

Route::get('/change/{lang}', function ($lang) {
    App::setLocale($lang);
    session()->put('locale', $lang);
    return redirect()->back();
})->name('changeLang');

// localization default
Route::get('/change', function () {
    return view('welcome');
});

// 1. video 
// 2.1 daftar
// 2.2 login
// 3. utama

Route::get('/register-create', [RegisterNewAccountController::class, 'create'])->name('register.create');

// topic learn TopicLearnController
Route::get('/topic/{level}/learn', [TopicLearnController::class, 'detail'])->name('topic.detail');
// easy
// Route::get('/topic/1/easy/learn', [TopicLearnController::class, 'topic01easy'])->name('topic.1.easy');
Route::get('/topik/1/tingkat-mudah', function () {
    return view('topik.01.tingkat-mudah'); 
});
Route::get('/topik/1/tingkat-menengah', function () {
    return view('topik.01.tingkat-menengah'); 
});

Route::get('/topik/1/tingkat-mahir', function () {
    return view('topik.01.tingkat-mahir'); 
});