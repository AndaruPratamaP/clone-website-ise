<?php

use App\Http\Controllers\Pages\Dashboard\Shortener\LinkShortener;
use App\Http\Controllers\Pages\Dashboard\Shortener\LinkShortenerTable;
use App\Http\Controllers\Pages\Auth\Login;
use App\Http\Controllers\Pages\Auth\Logout;
use App\Http\Controllers\Pages\Redirect\RedirectShortener;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Hi";
})->name('home');

Route::get('go/{short}', RedirectShortener::class);

// Routes that require authentication
Route::middleware(['auth'])->group(function () {
    Route::get('shortener', LinkShortenerTable::class);
    Route::get('shorten', LinkShortener::class);

    Route::get('dashboard', function () {
        return "welcome";
    })->name('dashboard');

    // This route can only be accessed when user have permission to route test
    Route::get('test', function () {
        return "test";
    })->name('test')->middleware('permission:test');

    Route::get('logout', Logout::class)->name('logout');
});

// Routes that have to be not authenticated
Route::middleware(['guest'])->group(function () {
    Route::get('login', Login::class)->name('login');
});
