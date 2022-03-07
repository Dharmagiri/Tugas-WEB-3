<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengenalanController;

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

Route::get('job1', [PengenalanController::class, 'job1'])->name('job1');
Route::get('jobs2', [PengenalanController::class, 'jobs2'])->name('jobs2');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
require __DIR__.'/auth.php';
