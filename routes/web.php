<?php

use App\Http\Controllers\CalonController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\SoalController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['role:admin']], function () {
    Route::prefix('calonkaryawan')
    ->group(function ()
    {
        Route::get('/', [CalonController::class,'index'])->name('calon.index');
        Route::any('/generate-password', [CalonController::class, 'generate'])->name('generate.pass');
        Route::post('/post', [CalonController::class, 'post'])->name('calon.post');
    });

    Route::prefix('paket')->group(function()
    {
        Route::get('/', [PaketController::class, 'index'])->name('paket.index');
        Route::post('/add', [PaketController::class, 'post'])->name('paket.post');
        Route::get('/edit/{id}', [PaketController::class, 'edit'])->name('paket.edit');
        Route::put('/edit/{id}', [PaketController::class, 'update'])->name('paket.update');
        Route::get('/{id}', [PaketController::class, 'delete'])->name('paket.delete');
    });

    Route::prefix('soal')->group(function ()
    {
        Route::get('/', [SoalController::class, 'index'])->name('soal.index');
    });
});




