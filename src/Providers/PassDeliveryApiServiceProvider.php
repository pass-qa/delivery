<?php

namespace PassQa\Delivery\Providers;

use Illuminate\Support\ServiceProvider;
use PassQa\Delivery\Orders;

class PassDeliveryApiServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../../config/pass-qa.php',
            'pass-qa');

        $this->app->bind('pass-order', function () {
            return new Orders(config('pass-qa.api-token'));
        });
    }
}