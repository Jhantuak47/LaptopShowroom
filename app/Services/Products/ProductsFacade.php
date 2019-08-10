<?php
namespace App\Services\Products;

use \Illuminate\Support\Facades\Facade;

/**
 * Facade for user service
 */
class ProductsFacade extends Facade
{

    /**
     * Returning service name
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'App\Services\Products\ProductsService';
    }
}
