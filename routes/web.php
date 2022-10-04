<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\akunController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\ResepsionisController;


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
    return redirect('/');
});


// LOGIN END


Route::get('/', function () {
    return view('pages.index');
});


// REGISTER

Route::get('/register', function(){
    return view('Akun.register');
});
Route::post('/regist', [akunController::class, 'Register']);

// REGISTER END

Route::middleware(['auth', 'roleaccess'])->group(function(){

   
    Route::get('/profile', function(){
        return view('pages.profile');
    });
    Route::get('/services', function(){
        return view('pages.service');
    });
    Route::put('/ubahData', [akunController::class, 'ubahData']);
    // Tamu
    Route::post('/pesanKamar/{id}', [TamuController::class, 'PesanKamar']);
    Route::get('/pesanKamarForm/{id}', [TamuController::class, 'getDataReservasi']);
    Route::get('/buktiPemesanan', [TamuController::class, 'buktiPemesanan']);


    // Admin
    Route::get('/ruangan', [AdminController::class, 'getDataKamar']);
    Route::post('/tambahkamar', [AdminController::class, 'TambahKamar']);
    Route::get('/addKamar', function(){
        return view('pages.tambahKamar');
    });
    Route::delete('/deleteThis/{id}',[AdminController::class, 'deleteData'])->name('delete');
    Route::post('/tambahService', [AdminController::class, 'TambahService']);
    Route::get('/addService', function(){
        return view('pages.tambahService');
    });
    Route::get('/services', [AdminController::class, 'getDataService']);
    Route::get('/ubahServiceForm/{id}', [AdminController::class, 'ubahServiceForm']);
    Route::put('/ubahService/{id}', [AdminController::class, 'ubahService']);
    Route::get('/ubahRuanganForm/{id}', [AdminController::class, 'ubahRuanganForm']);
    Route::put('/ubahRuangan/{id}', [AdminController::class, 'ubahRuangan']);


    // Resepsionis
    Route::get('/search', [ResepsionisController::class, 'search']);
    Route::get('/searchDate', [ResepsionisController::class, 'searchDate']);
    Route::get('/repsepsionis', [ResepsionisController::class, 'resepsionis']);

});

