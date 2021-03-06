<?php

namespace Sco\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *-
     * @return void
     */
    public function register()
    {
        $this->app->bind(\Sco\Contracts\Repositories\AccountBookTypeRepository::class, \Sco\Repositories\AccountBookTypeRepositoryEloquent::class);
        $this->app->bind(\Sco\Contracts\Repositories\AccountBookRepository::class, \Sco\Repositories\AccountBookRepositoryEloquent::class);
        $this->app->bind(\Sco\Contracts\Repositories\CategoryRepository::class, \Sco\Repositories\CategoryRepositoryEloquent::class);
        $this->app->bind(\Sco\Contracts\Repositories\AssetTypeRepository::class, \Sco\Repositories\AssetTypeRepositoryEloquent::class);
        //:end-bindings:
    }
}
