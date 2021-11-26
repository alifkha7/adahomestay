<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Admin\RoomGalleryController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\TentangController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tentang-kami', [TentangController::class, 'index'])->name('tentang');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');
Route::get('/details/{id}', [DetailController::class, 'index'])->name('detail');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard/rooms', [RoomController::class, 'index'])->name('room');
Route::get('/dashboard/room/create', [RoomController::class, 'create'])->name('room-create');
Route::get('/dashboard/room/{id}', [RoomController::class, 'details'])->name('room-details');

// ->middleware(['auth', 'admin'])
// ->namespace('Admin')
Route::prefix('admin')
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('admin-dashboard');
        Route::resource('room', RoomController::class);
        Route::resource('room-gallery', RoomGalleryController::class);
    });

Auth::routes();