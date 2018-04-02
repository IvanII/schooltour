<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Contact;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.main', function($view)
        {
            $view->with('contactsLayout', Contact::all()->first());
        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
