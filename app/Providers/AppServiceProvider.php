<?php


namespace App\Providers;
use App\Models\Department;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
         View::composer('*', function ($view) {
        $view->with('datas', Department::all());
    });
    }
}
