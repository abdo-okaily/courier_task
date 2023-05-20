<?php

namespace App\Integrations\Shipment;

use App\Interfaces\ShippingIntegration;
use App\Exceptions\Shipping\UndefinedShippingMethodException;
use App\Shipping\Couriers As Couriers;
class Shipment
{
    /**
     * Factory Method that create new instance of the shipping integration.
     */
    public static function make($courier_name) : ShippingIntegration
    {
        /*Couriers
        switch($shippingMethodID) {
            case ShippingMethods::TOROD:
                return new Torod;
            case ShippingMethods::BEZZ:
                return new CourierTwo;
        }*/



        throw new UndefinedShippingMethodException;
    }
}
