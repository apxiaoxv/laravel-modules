<?php

namespace Apxiaoxv\Modules\Providers;

use Illuminate\Support\ServiceProvider;
use Apxiaoxv\Modules\Contracts\RepositoryInterface;
use Apxiaoxv\Modules\Laravel\LaravelFileRepository;

class ContractsServiceProvider extends ServiceProvider
{
    /**
     * Register some binding.
     */
    public function register()
    {
        $this->app->bind(RepositoryInterface::class, LaravelFileRepository::class);
    }
}
