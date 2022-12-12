<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Interfaces\AlbumInterfaces\AlbumRepositoryInterface;
use App\Repositories\AlbumRepository;


class AlbumRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(AlbumRepositoryInterface::class,AlbumRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
