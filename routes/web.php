<?php

use App\Http\Controllers\CalonController;
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
Route::any('/generate-password', function () {
    return (Str::random(4)); 
});

Route::prefix('calonkaryawan')
->group(function ()
{
    Route::get('/', [CalonController::class,'index'])->name('calon.index');
    Route::any('/generate-password', [CalonController::class, 'generate'])->name('generate.pass');
    Route::post('/post', [CalonController::class, 'post'])->name('calon.post');
});


