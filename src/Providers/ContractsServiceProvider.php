<?php

namespace Risentang\Modules\Providers;

use Illuminate\Support\ServiceProvider;
use Risentang\Modules\Contracts\RepositoryInterface;
use Risentang\Modules\Laravel\Repository;

class ContractsServiceProvider extends ServiceProvider
{
    /**
     * Register some binding.
     */
    public function register()
    {
        $this->app->bind(RepositoryInterface::class, Repository::class);
    }
}
