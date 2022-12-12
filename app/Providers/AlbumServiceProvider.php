<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\AlbumInterfaces\AlbumServiceInterface;
use App\Services\AlbumService;

class AlbumServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(AlbumServiceInterface::class,AlbumService::class);
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
