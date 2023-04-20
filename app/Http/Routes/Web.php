<?php

use App\Http\Controllers\Pages\Dashboard\Shortener\LinkShortener;
use App\Http\Controllers\Pages\Dashboard\Shortener\LinkShortenerTable;
use App\Http\Controllers\Pages\Auth\Login;
use App\Http\Controllers\Pages\Auth\Logout;
use App\Http\Controllers\Pages\Redirect\RedirectShortener;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Hi";
});

Route::get('go/{short}', RedirectShortener::class);

// Routes that require authentication
Route::middleware(['auth'])->group(function () {
    Route::get('shortener', LinkShortenerTable::class);
    Route::get('shorten', LinkShortener::class);

    Route::get('dashboard', function () {
        return "welcome";
    })->name('dashboard')->middleware('permission:test');

    Route::get('logout', Logout::class)->name('logout');
});

// Routes that have to be authenticated
Route::middleware(['guest'])->group(function () {
    Route::get('login', Login::class)->name('login');
});
