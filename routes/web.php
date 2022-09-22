<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\akunController;
use App\Http\Controllers\AdminController;

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
// LOGIN 

Route::get('/login', [akunController::class, 'index'])->name('login');

Route::post('/logincheck', [akunController::class, 'Login']);

Route::get('/logOut', function(){
    Auth::logout();
    return redirect('/login');
});


// LOGIN END

// REGISTER

Route::get('/register', function(){
    return view('Akun.register');
});
Route::post('/regist', [akunController::class, 'Register']);

// REGISTER END

Route::middleware(['auth', 'roleaccess'])->group(function(){

    Route::get('/', function () {
        return view('pages.index');
    });
    Route::get('/ruangan', [AdminController::class, 'getDataKamar']);
 Route::get('/profile', function(){
    return view('pages.profile');
});
    Route::get('/services', function(){
        return view('pages.service');
    });

    Route::put('/ubahData', [akunController::class, 'ubahData']);
    

    Route::post('/tambahkamar', [AdminController::class, 'TambahKamar']);
    Route::get('/addKamar', function(){
        return view('pages.tambahKamar');
    });
});



















