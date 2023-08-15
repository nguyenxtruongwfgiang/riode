<?php

namespace App\Providers;

use App\Models\Color;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades;
use Illuminate\View\View;

class ColorsComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        view()->composer('client.layouts.aside', function (View $view) {
            $colors = Color::query()->get();
            $view->with('colors', $colors);
        });
    }
}
