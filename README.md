# laravel-cart
Laravel Package for the management of cart.

Install the Package by :
composer require devbuddy/cart

After successfully installation configure the package into your project.

Add where need to use the Cart : use Cart;

Methods

Cart::insert();
Cart::update();
Cart::total();
Cart::remove();
Cart::total_items();
Cart::contents();
Cart::get_item();
Cart::has_options();
Cart::product_options();
Cart::format_number();
Cart::destroy();
