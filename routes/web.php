<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\tsuburController;
use App\Http\Controllers\DatasayurController;
use App\Http\Controllers\AhpController;
use App\Http\Controllers\AhpsuburController;
use App\Http\Controllers\AhpkeringController;
use App\Http\Controllers\AhpbasahController;
use App\Http\Controllers\infoController;
use App\Http\Controllers\RekomendasiController;
use App\Http\Controllers\tkeringController;
use App\Http\Controllers\tbasahController;
use GuzzleHttp\Middleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/login', [loginController::class, 'index'])->name('login');
Route::post('/postlogin', [loginController::class, 'postLogin'])->name('postLogin');
Route::post('/logout', [LoginController::class, 'postLogout'])->name('logout');


Route::get('/tanahsubur', [tsuburController::class, 'index'])->name('tsubur');
Route::post('/tanahsubur/deleteAll', [tsuburController::class, 'deleteAll'])->name('tsubur.deleteAll');


Route::get('/tanahkering', [tkeringController::class, 'index'])->name('tkering');
Route::post('/tanahkering/deleteAll', [tkeringController::class, 'deleteAll'])->name('tkering.deleteAll');

Route::get('/tanahbasah', [tbasahController::class, 'index'])->name('tbasah');
Route::post('/tanahbasah/deleteAll', [tbasahController::class, 'deleteAll'])->name('tbasah.deleteAll');


Route::get('/infotanaman', [infoController::class, 'index'])->name('infotanaman');

Route::get('/datasayuran', function () {
    return view('tanamansayuran.datasayuran');
});

Route::get('/datasayuran', [DatasayurController::class, 'index'])->name('datasayuran');

Route::get('/rekomendasitanaman', function () {
    return view('ahp.rekomendasi');
});

Route::get('/rekomendasitanaman', [RekomendasiController::class, 'index'])->name('rekomendasi');


Route::get('/ahp', [AhpController::class, 'index'])->name('ahp.index');
Route::get('/ahpsubur', [AhpsuburController::class, 'index'])->name('ahpsubur');


Route::get('/ahpkering', [AhpkeringController::class, 'index'])->name('ahpkering');
Route::get('/ahp-result', [AhpkeringController::class, 'index'])->name('ahp.result');

Route::get('/ahpBasah', [AhpbasahController::class, 'index'])->name('ahpbasah');



Route::group (['Middleware'=> ['auth', 'ceklevel::admin']], function(){
    Route::post('/simpandatasol', [DatasayurController::class, 'storesolana'])->name('simpandatasol');
    Route::get('/tambahsolana', [DatasayurController::class, 'createsolana'])->name('tambahsolana');
    Route::get('/editsolana/{id}', [DatasayurController::class, 'editsolana'])->name('editsolana');
    Route::post('/updatesolana/{id}', [DatasayurController::class, 'updatesolana'])->name('updatesolana');
    Route::get('/deletesolana/{id}', [DatasayurController::class, 'destroysolana'])->name('deletesolana');


    Route::get('/tambahfabaceae', [DatasayurController::class, 'createfabaceae'])->name('tambahfabaceae');
    Route::post('/simpandatafab', [DatasayurController::class, 'storefabaceae'])->name('simpandatafab');
    Route::get('/editfabaceae/{id}', [DatasayurController::class, 'editfabaceae'])->name('editfabaceae');
    Route::post('/updatefabaceae/{id}', [DatasayurController::class, 'updatefabaceae'])->name('updatefabaceae');
    Route::get('/deletefabaceae/{id}', [DatasayurController::class, 'destroyfabaceae'])->name('deletefabaceae');

    Route::get('/tambahchenopodia', [DatasayurController::class, 'createchenopodia'])->name('tambahchenopodia');
    Route::post('/simpandatachen', [DatasayurController::class, 'storechenopodia'])->name('simpandatachen');
    Route::get('/editchenopodia/{id}', [DatasayurController::class, 'editchenopodia'])->name('editchenopodia');
    Route::post('/updatechenopodia/{id}', [DatasayurController::class, 'updatechenopodia'])->name('updatechenopodia');
    Route::get('/deletechenopodia/{id}', [DatasayurController::class, 'destroychenopodia'])->name('deletechenopodia');

});
