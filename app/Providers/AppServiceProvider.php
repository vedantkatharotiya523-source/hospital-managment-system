<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

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

    if (config('app.env') === 'production' || isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
        URL::forceScheme('https');
    }

        \Illuminate\Support\Facades\View::composer('*', function ($view) {
            try {
                if (\Illuminate\Support\Facades\Schema::hasTable('settings')) {
                    $settings = \App\Models\settings::pluck('value', 'key')->toArray();
                    $logoUrl = isset($settings['logo']) && $settings['logo'] && file_exists(public_path('storage/' . $settings['logo']))
                        ? asset('storage/' . $settings['logo'])
                        : (isset($settings['logo']) && file_exists(public_path('images/' . $settings['logo']))
                            ? asset('images/' . $settings['logo'])
                            : asset('images/logo.png'));

                    $iconUrl = isset($settings['icon']) && $settings['icon'] && file_exists(public_path('storage/' . $settings['icon']))
                        ? asset('storage/' . $settings['icon'])
                        : (isset($settings['icon']) && file_exists(public_path('images/' . $settings['icon']))
                            ? asset('images/' . $settings['icon'])
                            : asset('images/icon-logo.png'));

                    $view->with([
                        'settings' => $settings,
                        'logoUrl'  => $logoUrl,
                        'iconUrl'  => $iconUrl,
                    ]);
                }
            } catch (\Throwable $e) {
                // Ignore during migrations or when database is not connected
            }
        });
    }
}
