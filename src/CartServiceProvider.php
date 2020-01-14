<?php

namespace Devbuddy\Cart;

use Illuminate\Support\ServiceProvider;
use App;
class CartServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        App::bind('cart', function()
		{
			return new Cart;
		});
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
