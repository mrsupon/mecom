<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Dashboards\Controller;
use App\Http\Controllers\Dashboards\Admin\Controller as AdminController;
use App\Http\Controllers\Dashboards\Vendor\Controller as VendorController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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
    //return view('welcome');
    return view('frontends.index');
})->name('home');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [Controller::class, 'index'])->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboards/logout/{backToDashboard?}', [Controller::class, 'destroy'])->name('dashboards.logout');

    Route::get('/dashboards/admin/logout', [AdminController::class, 'destroy'])->name('dashboards.admin.logout');
    Route::get('/dashboards/admin/profile/edit', [AdminController::class, 'editProfile'])->name('dashboards.admin.profile.edit');
    Route::put('/dashboards/admin/profile', [AdminController::class, 'updateProfile'])->name('dashboards.admin.profile.update');
    Route::get('/dashboards/admin/password/{id}/edit', [AdminController::class, 'editPassword'])->name('dashboards.admin.password.edit');
    Route::put('/dashboards/admin/password', [AdminController::class, 'updatePassword'])->name('dashboards.admin.password.update');

    Route::get('/dashboards/vendor/logout', [VendorController::class, 'destroy'])->name('dashboards.vendor.logout');
    Route::get('/dashboards/vendor/profile/edit', [VendorController::class, 'editProfile'])->name('dashboards.vendor.profile.edit');
    Route::put('/dashboards/vendor/profile', [VendorController::class, 'updateProfile'])->name('dashboards.vendor.profile.update');
    Route::get('/dashboards/vendor/password/{id}/edit', [VendorController::class, 'editPassword'])->name('dashboards.vendor.password.edit');
    Route::put('/dashboards/vendor/password', [VendorController::class, 'updatePassword'])->name('dashboards.vendor.password.update');
});

Route::middleware('guest')->group(function () {
    Route::get('/dashboards/login', [Controller::class, 'login'])->name('dashboards.login');
    Route::get('/dashboards/register', [Controller::class,'register'])->name('dashboards.register');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
