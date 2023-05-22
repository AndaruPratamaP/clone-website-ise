<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages\Error404;
use App\Http\Controllers\Pages\Error500;
use App\Http\Controllers\Pages\Auth\Login;
use App\Http\Controllers\Pages\ComingSoon;
use App\Http\Controllers\Pages\Auth\Forgot;
use App\Http\Controllers\Pages\Auth\Logout;
use App\Http\Controllers\Pages\Auth\Verify;
use App\Http\Controllers\Pages\Examples\Aos;
use App\Http\Controllers\Pages\Auth\Register;
use App\Http\Controllers\Pages\BionixLanding;
use App\Http\Controllers\Pages\Examples\Swiper;
use App\Http\Controllers\Pages\Auth\RequestForgot;
use App\Http\Controllers\Pages\Auth\EmailVerification;
use App\Http\Controllers\Pages\Dashboard\Icon\GtsTable;
use App\Http\Controllers\Pages\Redirect\RedirectShortener;
use App\Http\Controllers\Pages\Dashboard\Icon\GtsDashboard;
use App\Http\Controllers\Pages\Dashboard\UserHomeDashboard;
use App\Http\Controllers\Pages\Dashboard\Icon\DsRegistration;
use App\Http\Controllers\Pages\Dashboard\Icon\UxRegistration;
use App\Http\Controllers\Pages\Dashboard\Icon\GtsRegistration;
use App\Http\Controllers\Pages\Dashboard\Rise\RiseRegistration;
use App\Http\Controllers\Pages\Examples\StepRegistrationExample;
use App\Http\Controllers\Pages\Dashboard\Shortener\LinkShortener;
use App\Http\Controllers\Pages\Dashboard\Shortener\LinkShortenerTable;

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
});

// check if development
if (config('app.env') === 'local' || config('app.env') === 'development') {
  Route::get('swiper', Swiper::class);
  Route::get('aos', Aos::class);
  Route::get('stepform-example', StepRegistrationExample::class); #example will be deleted
  Route::get('my', UserHomeDashboard::class)->name('my'); #temp for development
  Route::get('my/gts', GtsDashboard::class)->name('my.gts'); #temp for development
  Route::get('my/gts/registration', GtsRegistration::class); #temp for development

  Route::get('my/ux/registration', UxRegistration::class); #temp for development
  Route::get('my/ds/registration', DsRegistration::class); #temp for development
  Route::get('my/rise/registration', RiseRegistration::class); #temp for development
  Route::get('bionix', BionixLanding::class); #temp for development
  Route::get('shorten', LinkShortener::class); #temp for development
  Route::get('verify', EmailVerification::class); #temp for development


//  Error Pages
  Route::get('404', Error404::class)->name('404'); #temp for development
  Route::get('500', Error500::class)->name('500'); #temp for development
  Route::get('coming-soon', ComingSoon::class)->name('conming-soon'); #temp for development
}

//coba
Route::get('gts-table', GtsTable::class);
