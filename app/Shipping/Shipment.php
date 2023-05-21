<?php

namespace App\Shipping;

use App\Interfaces\ShippingIntegration;
use App\Exceptions\Shipping\UndefinedShippingMethodException;

class Shipment
{

    /**
     * Factory Method that create new instance of the shipping integration.
     */
    public static function make($courier_name) : ShippingIntegration
    {
        $name = 'App\\Shipping\\Couriers\\'.$courier_name.'\\Courier'.$courier_name;

        if (class_exists($name))
        {
            return new $name();
        }
        else
        {
            throw new UndefinedShippingMethodException;
        }

    }
}
