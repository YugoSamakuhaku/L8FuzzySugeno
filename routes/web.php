<?php

declare(strict_types=1);

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

Route::get('/', fn () => view('welcome'));

Route::group(['middleware' => 'guest'], function (): void {
    Route::get('/login', Login::class)->name('auth.login');
});

Route::group(['middleware' => 'auth'], function (): void {
    Route::get('/blank', fn () => view('pages.blank'))->name('blank');
    Route::get('/logout', function (): void {
        Auth::logout();
        redirect()->route('auth.login');
    });
});
