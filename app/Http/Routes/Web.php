<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages\Error404;
use App\Http\Controllers\Pages\Error500;
use App\Http\Controllers\Pages\Auth\Login;
use App\Http\Controllers\Pages\ComingSoon;
use App\Http\Controllers\Pages\IseLanding;
use App\Http\Controllers\Pages\Auth\Forgot;
use App\Http\Controllers\Pages\Auth\Logout;
use App\Http\Controllers\Pages\Auth\Verify;
use App\Http\Controllers\Pages\IconLanding;
use App\Http\Controllers\Pages\Examples\Aos;
use App\Http\Controllers\Pages\Auth\Register;
use App\Http\Controllers\Pages\BionixLanding;
use App\Http\Controllers\Pages\Examples\Swiper;
use App\Http\Controllers\Pages\Auth\RequestForgot;
use App\Http\Controllers\Pages\TermsAndConditions;
use App\Http\Controllers\Pages\Dashboard\Icon\GtsTable;
use App\Http\Controllers\Pages\Redirect\RedirectShortener;
use App\Http\Controllers\Pages\Dashboard\Icon\GtsDashboard;
use App\Http\Controllers\Pages\Dashboard\UserHomeDashboard;
use App\Http\Controllers\Pages\Dashboard\AdminHomeDashboard;
use App\Http\Controllers\Pages\Dashboard\Icon\DsRegistration;
use App\Http\Controllers\Pages\Dashboard\Icon\GtsAdminAction;
use App\Http\Controllers\Pages\Dashboard\Icon\UxRegistration;
use App\Http\Controllers\Pages\Dashboard\Icon\GtsRegistration;
use App\Http\Controllers\Pages\Dashboard\Icon\GtsDetailPeserta;
use App\Http\Controllers\Pages\Dashboard\Rise\RiseRegistration;
use App\Http\Controllers\Pages\Examples\StepRegistrationExample;
use App\Http\Controllers\Pages\Dashboard\Shortener\LinkShortener;
use App\Http\Controllers\Pages\Dashboard\Shortener\LinkShortenerTable;

Route::get('go/{short}', RedirectShortener::class);
Route::get('/', IseLanding::class)->name('landing.ise');
Route::get('icon', IconLanding::class)->name('landing.icon');

Route::get('coming-soon', ComingSoon::class)->name('comming-soon');
Route::get('/terms-and-conditions', TermsAndConditions::class)->name('terms-and-conditions');

// Routes that require authentication
Route::middleware(['auth'])->group(function () {

    Route::get('dashboard', function () {
        return 'welcome';
    })->name('dashboard');

    Route::name('my.')->prefix('my')->middleware(['permission:my'])->group(function () {
        Route::get('/', UserHomeDashboard::class)->name('');

        Route::prefix('gts')->middleware(['permission:my.gts'])->group(function () {
            Route::get('/', GtsDashboard::class)->name('gts');
            Route::get('/registration', GtsRegistration::class)->name('gts.registration');
        });
    });

    Route::name('admin.')->prefix('admin')->middleware(['permission:admin'])->group(function () {
        Route::get('/', AdminHomeDashboard::class)->name('');

        Route::get('shorten', LinkShortener::class)->name("shortener");
        Route::get('shortener', LinkShortenerTable::class)->name("shortener.table");

        Route::prefix('gts')->middleware(['permission:admin.gts'])->group(function () {
            Route::get('/', GtsTable::class)->name("gts.table");
            Route::get('/export', [GtsTable::class, "export"])->name("gts.export");
            Route::get('/{user_id}', GtsDetailPeserta::class)->name("gts.detail");
            Route::get('/{user_id}/{action}', GtsAdminAction::class)->name("gts.action");
        });
    });

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

    Route::get('my/ux/registration', UxRegistration::class); #temp for development
    Route::get('my/ds/registration', DsRegistration::class); #temp for development
    Route::get('my/rise/registration', RiseRegistration::class); #temp for development
    Route::get('bionix', BionixLanding::class); #temp for development

    //  Error Pages
    Route::get('404', Error404::class)->name('404');
    Route::get('500', Error500::class)->name('500');
}
