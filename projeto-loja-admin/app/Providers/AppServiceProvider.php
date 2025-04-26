<?php

namespace App\Providers;

use App\Models\Entrada;
use App\Models\Movimento;
use App\Models\Saida;
use App\Observers\EntradaObserver;
use App\Observers\MovimentoObserver;
use App\Observers\SaidaObserver;
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
        Entrada::observe(EntradaObserver::class);
        Saida::observe(SaidaObserver::class);
    }
}
