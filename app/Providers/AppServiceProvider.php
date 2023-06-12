<?php

namespace App\Providers;

use App\Core\Application\Services\Shortener\ShortenerService;
use App\Core\Domain\Repositories\SqlShortenerRepository;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //

        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }
    }
}
