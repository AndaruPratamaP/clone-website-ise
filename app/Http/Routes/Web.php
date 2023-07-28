<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages\Error404;
use App\Http\Controllers\Pages\Error500;
use App\Http\Controllers\Pages\Auth\Login;
use App\Http\Controllers\Pages\ComingSoon;
use App\Http\Controllers\Pages\GtsLanding;
use App\Http\Controllers\Pages\IseLanding;
use App\Http\Controllers\Pages\Auth\Forgot;
use App\Http\Controllers\Pages\Auth\Logout;
use App\Http\Controllers\Pages\Auth\Verify;
use App\Http\Controllers\Pages\IconLanding;
use App\Http\Controllers\Pages\Maintenance;
use App\Http\Controllers\Pages\RiseLanding;
use App\Http\Controllers\Pages\Examples\Aos;
use App\Http\Controllers\Pages\Auth\Register;
use App\Http\Controllers\Pages\BionixLanding;
use App\Http\Controllers\Pages\Examples\Swiper;
use App\Http\Controllers\Pages\DsAcademyLanding;
use App\Http\Controllers\Pages\Auth\RequestForgot;
use App\Http\Controllers\Pages\TermsAndConditions;
use App\Http\Controllers\Pages\Dashboard\Icon\DsTable;
use App\Http\Controllers\Pages\Dashboard\Icon\UxTable;
use App\Http\Controllers\Pages\Dashboard\Icon\GtsTable;
use App\Http\Controllers\Pages\Dashboard\Rise\RiseTable;
use App\Http\Controllers\Pages\Dashboard\Icon\DsDashboard;
use App\Http\Controllers\Pages\Dashboard\Icon\DsSelection;
use App\Http\Controllers\Pages\Dashboard\Icon\UxDashboard;
use App\Http\Controllers\Pages\Dashboard\Icon\UxSelection;
use App\Http\Controllers\Pages\Redirect\RedirectShortener;
use App\Http\Controllers\Pages\Dashboard\Icon\DsCommitment;
use App\Http\Controllers\Pages\Dashboard\Icon\GtsDashboard;
use App\Http\Controllers\Pages\Dashboard\Icon\UxCommitment;
use App\Http\Controllers\Pages\Dashboard\UserHomeDashboard;
use PhpOffice\PhpSpreadsheet\Calculation\Financial\Coupons;
use App\Http\Controllers\Pages\Dashboard\AdminHomeDashboard;
use App\Http\Controllers\Pages\Dashboard\Bionix\BionixTable;
use App\Http\Controllers\Pages\Dashboard\Coupon\CouponTable;
use App\Http\Controllers\Pages\Dashboard\Icon\DsAdminAction;
use App\Http\Controllers\Pages\Dashboard\Icon\UxAdminAction;
use App\Http\Controllers\Pages\Dashboard\Rise\RiseDashboard;
use App\Http\Controllers\Pages\Dashboard\Bionix\IsClassTable;
use App\Http\Controllers\Pages\Dashboard\Coupon\CreateCoupon;
use App\Http\Controllers\Pages\Dashboard\Icon\DsRegistration;
use App\Http\Controllers\Pages\Dashboard\Icon\GtsAdminAction;
use App\Http\Controllers\Pages\Dashboard\Icon\UxRegistration;
use App\Http\Controllers\Pages\Dashboard\Bionix\BionixRdTable;
use App\Http\Controllers\Pages\Dashboard\Icon\DsDetailPeserta;
use App\Http\Controllers\Pages\Dashboard\Icon\GtsRegistration;
use App\Http\Controllers\Pages\Dashboard\Icon\UxDetailPeserta;
use App\Http\Controllers\Pages\Dashboard\Rise\RiseAdminAction;
use App\Http\Controllers\Pages\UxAcademyLanding;  //ux academy
use App\Http\Controllers\Pages\Dashboard\Bionix\BionixRdDpForm;
use App\Http\Controllers\Pages\Dashboard\Icon\GtsDetailPeserta;
use App\Http\Controllers\Pages\Dashboard\Rise\RiseRegistration;
use App\Http\Controllers\Pages\Dashboard\Bionix\BionixDashboard;
use App\Http\Controllers\Pages\Dashboard\Rise\RiseDetailPeserta;
use App\Http\Controllers\Pages\Examples\StepRegistrationExample;
use App\Http\Controllers\Pages\Dashboard\Bionix\IsClassDashboard;
use App\Http\Controllers\Pages\Dashboard\Shortener\LinkShortener;
use App\Http\Controllers\Pages\Dashboard\Bionix\BionixAdminAction;
use App\Http\Controllers\Pages\Dashboard\Bionix\BionixRdDashboard;
use App\Http\Controllers\Pages\Dashboard\Bionix\BionixRegistration;
use App\Http\Controllers\Pages\Dashboard\Bionix\IsClassAdminAction;
use App\Http\Controllers\Pages\Dashboard\Bionix\BionixDetailPeserta;
use App\Http\Controllers\Pages\Dashboard\Bionix\BionixRdAdminAction;
use App\Http\Controllers\Pages\Dashboard\Bionix\IsClassRegistration;
use App\Http\Controllers\Pages\Dashboard\Bionix\BionixRdRegistration;
use App\Http\Controllers\Pages\Dashboard\Bionix\IsClassDetailPeserta;
use App\Http\Controllers\Pages\Dashboard\Bionix\BionixRdDetailPeserta;
use App\Http\Controllers\Pages\Dashboard\Bionix\BionixRdPelunasanForm;
use App\Http\Controllers\Pages\Dashboard\Shortener\LinkShortenerTable;
use App\Http\Controllers\Pages\Dashboard\Shortener\LinkShortenerAction;
use App\Http\Controllers\Presentation\Dashboard\CouponController;

Route::get('go/{short}', RedirectShortener::class);
Route::get('/', IseLanding::class)->name('landing.ise');
Route::get('icon', IconLanding::class)->name('landing.icon');
Route::get('rise', RiseLanding::class)->name('landing.rise');
Route::get('bionix', BionixLanding::class)->name('landing.bionix');
Route::get('icon/ds-academy', DsAcademyLanding::class)->name('landing.dsAcademy');
Route::get('icon/ux-academy', UxAcademyLanding::class)->name('landing.uxAcademy');
Route::get('icon/gts', GtsLanding::class)->name('landing.gts');

Route::get('coming-soon', ComingSoon::class)->name('comming-soon');
Route::get('terms-and-conditions', TermsAndConditions::class)->name('terms-and-conditions');
//  Error Pages
Route::get('not-found', Error404::class)->name('404');
Route::get('error', Error500::class)->name('500');
Route::get('maintenance', Maintenance::class)->name('maintenance');

// Routes that require authentication
Route::middleware(['auth'])->group(function () {
  Route::get('dashboard', function () {
    return 'welcome';
  })->name('dashboard');

  Route::name('my.')
    ->prefix('my')
    ->middleware(['permission:my'])
    ->group(function () {
      Route::get('/', UserHomeDashboard::class)->name('');

      Route::prefix('gts')
        ->middleware(['permission:my.gts'])
        ->group(function () {
          Route::get('/', GtsDashboard::class)->name('gts');
          Route::get('/registration', GtsRegistration::class)->name('gts.registration');
        });

        Route::prefix('ds')
          ->middleware(['permission:my.ds'])
          ->group(function () {
            Route::get('/', DsDashboard::class)->name('ds');
            Route::get('/registration', DsRegistration::class)->name('dsacademy.registration');
            Route::get('/selection', DsSelection::class)->name('dsacademy.selection');
        });

        Route::prefix('ux')
          ->middleware(['permission:my.ux'])
          ->group(function () {
            Route::get('/', UxDashboard::class)->name('ux');
            Route::get('/registration', UxRegistration::class)->name('uxacademy.registration');
            Route::get('/selection', UxSelection::class)->name('uxacademy.selection');
        });

      Route::prefix('bionix')
        ->middleware(['permission:my.is'])
        ->group(function () {
        Route::get('/', BionixDashboard::class)->name('bionix');
        Route::get('/registration', BionixRegistration::class)->name('bionix.registration');
      });

      Route::prefix('bionix-rd')
        ->middleware(['permission:my.is'])
        ->group(function () {
        Route::get('/', BionixRdDashboard::class)->name('bionixroadshow');
        Route::get('/dp', BionixRdDpForm::class)->name('bionixroadshow.dp');
        Route::get('/pelunasan', BionixRdPelunasanForm::class)->name('bionixroadshow.pelunasan');
        Route::get('/registration', BionixRdRegistration::class)->name('bionixroadshow.registration');
      });

      Route::prefix('isclass')
        ->middleware(['permission:my.is'])
        ->group(function () {
          Route::get('/', IsClassDashboard::class)->name('isclass');
          Route::get('/registration', IsClassRegistration::class)->name('isclass.registration');
      });

      Route::prefix('rise')->group(function () {
        Route::get('/', RiseDashboard::class)->name('rise');
        Route::get('/registration', RiseRegistration::class)->name('rise.registration');
      });
    });

  Route::name('admin.')
    ->prefix('admin')
    ->middleware(['permission:admin'])
    ->group(function () {
      Route::get('/', AdminHomeDashboard::class)->name('');

      Route::prefix('shortener')->group(function () {
        Route::get('/', LinkShortenerTable::class)->name('shortener.table');
        Route::get('/create', LinkShortener::class)->name('shortener.create');
        Route::get('/delete/{short}', LinkShortenerAction::class)->name('shortener.delete');
      });

      Route::prefix('coupon')->group(function () {
        Route::get('/', CouponTable::class)->name('coupon.table');
        Route::get('/create', CreateCoupon::class)->name('coupon.create');
        Route::get('/delete/{code}', [CouponController::class, "delete"])->name('coupon.delete');
      });

      Route::prefix('gts')
        ->middleware(['permission:admin.gts'])
        ->group(function () {
          Route::get('/', GtsTable::class)->name('gts.table');
          Route::get('/export', [GtsTable::class, 'export'])->name('gts.export');
          Route::get('/{user_id}', GtsDetailPeserta::class)->name('gts.detail');
          Route::get('/{user_id}/{action}', GtsAdminAction::class)->name('gts.action');
        });
      Route::prefix('ux')
        ->middleware(['permission:admin.gts'])
        ->group(function () {
          Route::get('/', UxTable::class)->name('ux.table');
          Route::get('/export', [UxTable::class, 'export'])->name('uxacademy.export');
          Route::get('/{user_id}', UxDetailPeserta::class)->name('uxacademy.detail');
          Route::get('/{user_id}/{action}', UxAdminAction::class)->name('uxacademy.action');
        });
      Route::prefix('ds')
        ->middleware(['permission:admin.gts'])
        ->group(function () {
          Route::get('/', DsTable::class)->name('ds.table');
          Route::get('/export', [DsTable::class, 'export'])->name('dsacademy.export');
          Route::get('/{user_id}', DsDetailPeserta::class)->name('dsacademy.detail');
          Route::get('/{user_id}/{action}', DsAdminAction::class)->name('dsacademy.action');
        });
      Route::prefix('isclass')
        ->middleware(['permission:admin.is'])
        ->group(function () {
          Route::get('/', IsClassTable::class)->name('isclass.table');
          Route::get('/export', [IsClassTable::class, 'export'])->name('isclass.export');
          Route::get('/{user_id}', IsClassDetailPeserta::class)->name('isclass.detail');
          Route::get('/{user_id}/{action}', IsClassAdminAction::class)->name('isclass.action');
        });
      Route::prefix('bionix')
        ->middleware(['permission:admin.is'])
        ->group(function () {
          Route::get('/', BionixTable::class)->name('bionix.table');
          Route::get('/export', [BionixTable::class, 'export'])->name('bionix.export');
          Route::get('/{user_id}', BionixDetailPeserta::class)->name('bionix.detail');
          Route::get('/{user_id}/{action}', BionixAdminAction::class)->name('bionix.action');
        });
      Route::prefix('bionix-rd')
        ->middleware(['permission:admin.is'])
        ->group(function () {
          Route::get('/', BionixRdTable::class)->name('bionixroadshow.table');
          Route::get('/export', [BionixRdTable::class, 'export'])->name('bionixroadshow.export');
          Route::get('/{user_id}', BionixRdDetailPeserta::class)->name('bionixroadshow.detail');
          Route::get('/{user_id}/{action}', BionixRdAdminAction::class)->name('bionixroadshow.action');
        });
      Route::prefix('rise')
        ->middleware(['permission:admin.is'])
        ->group(function () {
          Route::get('/', RiseTable::class)->name('rise.table');
          Route::get('/export', [RiseTable::class, 'export'])->name('rise.export');
          Route::get('/{user_id}', RiseDetailPeserta::class)->name('rise.detail');
          Route::get('/{user_id}/{action}', RiseAdminAction::class)->name('rise.action');
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



}


