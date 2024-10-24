<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(\Kreait\Firebase\Database::class, function ($app) {
            // Load the credentials from the config file
            $serviceAccount = ServiceAccount::fromJsonFile(config('firebase.credentials.file'));

            // Set up Firebase with the correct database URL
            return (new Factory)
                ->withServiceAccount($serviceAccount)
                ->withDatabaseUri(config('firebase.database.url'))
                ->createDatabase();
        });
    }

    public function boot()
    {
        //
    }
}
