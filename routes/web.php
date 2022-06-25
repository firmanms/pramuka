<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AnggotaController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\DashController::class, 'index'])->name('/');
Route::get('/kwartir', [App\Http\Controllers\DashController::class, 'kwartir'])->name('kwartir');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('anggotas', AnggotaController::class);

    //Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::get('importExportView', [MyController::class, 'importExportView']);
    Route::get('export', [AnggotaController::class, 'export'])->name('export');
    Route::post('import', [AnggotaController::class, 'import'])->name('import');
    //Route::post('destroyall', [AnggotaController::class, 'destroyall'])->name('destroyall');
//     Route::delete('/anggotas/{ranting}', [AnggotaController::class, 'destroyall'])
//   ->name('anggotas.destroyall'); 
Route::get('/anggotas/{id}/destroyall', [AnggotaController::class, 'destroyall'])->name('anggotas.destroyall');
Route::get('/anggotas/resume/{id}', [AnggotaController::class, 'resume'])->name('anggotas.resume');
});
