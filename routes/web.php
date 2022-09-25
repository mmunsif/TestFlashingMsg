<?php

use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

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




Route::prefix('roles')->group(function () {
    Route::get('/', [RoleController::class, 'index'])->name('roles.index');
    Route::patch('/', [RoleController::class, 'update'])->name('roles.patch');
    Route::get('/create', [RoleController::class, 'create'])->name('roles.create');
    Route::get('/show', [RoleController::class, 'show'])->name('roles.show');
});
Route::resource('userschedule', RoleController::class);