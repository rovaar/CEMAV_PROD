<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // @assetv('css/home.css') -> /css/home.css?v=1791027590 (vegeu App\Support\Asset)
        Blade::directive('assetv', function ($expression) {
            return "<?php echo e(\\App\\Support\\Asset::versioned($expression)); ?>";
        });

        // @icon('heart-outline') -> <ion-icon ...><svg>...</svg></ion-icon> (vegeu App\Support\Icon)
        Blade::directive('icon', function ($expression) {
            return "<?php echo \\App\\Support\\Icon::render($expression); ?>";
        });
    }
}
