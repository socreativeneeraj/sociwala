<?php

declare(strict_types=1);
 
namespace SocreativeNeeraj\SociWala\Providers;
 
use Illuminate\Support\ServiceProvider;
 
final class SociWalaServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('social-icons', function ($app) {
            return new SocialIcons();
        });
    }

    public function boot(): void
    {
        //
    }
}