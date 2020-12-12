<?php

namespace App\Providers;

use App\Jobs\ProcessaImportacao;
use App\Services\PessoaService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(ProcessaImportacao::class, function ($app) {
            return [];
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bindMethod([ProcessaImportacao::class, 'handle'], function ($job, $app) {
            return $job->handle($app->make(PessoaService::class));
        });
    }
}
