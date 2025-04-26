<?php

namespace App\Providers;

use App\Models\Movimento;
use App\Observers\MovimentoObserver;
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
        Movimento::observe(MovimentoObserver::class);
    }
}
