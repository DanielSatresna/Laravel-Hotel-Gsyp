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

Route::get('/', function () {
    return view('pages.index');
});

// Login

Route::get('/login', [akunController::class, 'index'])->name('login');

Route::post('/logincheck', [akunController::class, 'Login']);

Route::get('/logOut', function(){
    Auth::logout();
    return redirect('/');
});

// Register

Route::get('/register', function(){
    return view('akun.register');
});
Route::post('/addData', [akunController::class,'addData']);


Route::middleware(['auth', 'roleaccess'])->group(function (){


    Route::get('/about', function(){
        return view('pages.about');
    });

    // Tamu
    Route::post('/pesanKamar/{id}', [TamuController::class, 'PesanKamar']);
    Route::get('/pesanKamarForm/{id}', [TamuController::class, 'GetDataReservasi']);
    Route::get('/buktiPemesanan', [TamuController::class, 'BuktiPemesanan']);

    // Admin
    Route::get('/rooms', [AdminController::class, 'GetDataKamar']);
    Route::post('/tambahKamar', [AdminController::class, 'TambahKamar']);
    Route::get('/tambahKamarForm', function(){
        return view('pages.tambahKamar');
    });
    Route::get('/editKamarForm/{id}', [AdminController::class, 'EditKamarForm']);
    Route::put('/editKamar/{id}', [AdminController::class, 'EditKamar']);
    Route::delete('/deleteThis/{id}', [AdminController::class, 'deleteDataKamar']);
    Route::get('/fasilitas', [AdminController::class, 'GetDataFasilitas']);
    Route::get('/tambahFasilitasForm', function(){
        return view('pages.tambahFasilitas');
    });
    Route::post('/tambahFasilitas', [AdminController::class, 'TambahFasilitas']);
    Route::put('/editFasilitas/{id}', [AdminController::class, 'EditFasilitas']);
    Route::get('/editFasilitasForm/{id}', [AdminController::class, 'EditFasilitasForm']);
    Route::delete('/deleteThisFasilitas/{id}', [AdminController::class, 'deleteDataFasilitas']);

    // Resepsionis
    Route::get('/resepsionis', [ResepsionisController::class, 'Resepsionis']);
    Route::get('/search', [ResepsionisController::class, 'Search']);
    Route::get('/searchDate', [ResepsionisController::class, 'SearchDate']);


});