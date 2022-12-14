<?php

use App\Http\Livewire\Shared\Dashboard;
use App\Http\Livewire\Shared\Profile;
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

Route::get('/', Dashboard::class)->name('dashboard');

//Create fallback route to dashboard
Route::fallback(function () {
    return redirect('/dashboard');
});

Route::get('/profile', Profile::class)->name('profile');