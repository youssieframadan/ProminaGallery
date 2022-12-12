<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Interfaces\ImageInterfaces\ImageRepositoryInterface;
use App\Repositories\ImageRepository;

class ImageRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ImageRepositoryInterface::class,ImageRepository::class);
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
