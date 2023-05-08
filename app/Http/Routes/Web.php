<?php

use App\Http\Controllers\Pages\Auth\Forgot;
use App\Http\Controllers\Pages\Dashboard\Shortener\LinkShortener;
use App\Http\Controllers\Pages\Dashboard\Shortener\LinkShortenerTable;
use App\Http\Controllers\Pages\Auth\Login;
use App\Http\Controllers\Pages\Auth\Logout;
use App\Http\Controllers\Pages\Auth\Register;
use App\Http\Controllers\Pages\Auth\RequestForgot;
use App\Http\Controllers\Pages\Auth\Verify;
use App\Http\Controllers\Pages\Dashboard\Icon\GtsDashboard;
use App\Http\Controllers\Pages\Redirect\RedirectShortener;
use App\Http\Controllers\Pages\Dashboard\Icon\StepRegistrationExample;
use App\Http\Controllers\Pages\Dashboard\Icon\GtsRegistration;
use App\Http\Controllers\Pages\Examples\Aos;
use App\Http\Controllers\Pages\Examples\Swiper;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return 'Hi';
})->name('home');

Route::get('go/{short}', RedirectShortener::class);

// Routes that require authentication
Route::middleware(['auth'])->group(function () {
  Route::get('shortener', LinkShortenerTable::class);
  Route::get('shorten', LinkShortener::class);

  Route::get('dashboard', function () {
    return 'welcome';
  })->name('dashboard');

  // This route can only be accessed when user have permission to route test
  Route::get('test', function () {
    return 'test';
  })
    ->name('test')
    ->middleware('permission:test');

  Route::get('logout', Logout::class)->name('logout');
});

// Routes that have to be not authenticated
Route::middleware(['guest'])->group(function () {
  Route::get('login', Login::class)->name('login');
  Route::get('register', Register::class)->name('register');
  Route::get('verify/{token}', Verify::class)->name('verify');
  Route::get('forgot/{token}', Forgot::class)->name('forgot');
  Route::get('forgot', RequestForgot::class)->name('request-forgot');
  Route::get('stepform-example', StepRegistrationExample::class); #example will be deleted
  Route::get('gts-registration', GtsRegistration::class); #temp for development
});

// check if development
if (config('app.env') === 'local' || config('app.env') === 'development') {
    Route::get('swiper', Swiper::class);
    Route::get('aos', Aos::class);
    Route::get('stepform-example', StepRegistrationExample::class); #example will be deleted
    Route::get('gts-registration', GtsRegistration::class); #temp for development
    Route::get('my/gts', GtsDashboard::class); #temp for development
}
