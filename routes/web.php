<?php

declare(strict_types=1);

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SupplierController;
use App\Http\Livewire\Auth\Login;
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


Route::group(['middleware' => 'guest'], function (): void {
    Route::get('/login', Login::class)->name('auth.login');
});

Route::group(['middleware' => 'auth'], function (): void {
    // Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('adminlte.dashboard');

    // Resource Master Product
    Route::resource('master_products', DashboardController::class, ['only' => ['index', 'create', 'edit', 'show']]);
    Route::resource('master_inggridients', DashboardController::class, ['only' => ['index', 'create', 'edit', 'show']]);
    Route::resource('suppliers', SupplierController::class, ['only' => ['index', 'create', 'edit', 'show']]);
    Route::resource('purchases', DashboardController::class, ['only' => ['index', 'create', 'show']]);
    Route::resource('request_sales', DashboardController::class, ['only' => ['index', 'create', 'show']]);
    Route::resource('users', DashboardController::class, ['only' => ['index', 'create', 'edit', 'show']]);
    Route::resource('roles', DashboardController::class, ['only' => ['index', 'create', 'edit', 'show']]);
    Route::resource('permissions', DashboardController::class, ['only' => ['index']]);


    Route::get('/logout', function (): void {
        Auth::logout();
    });
});
