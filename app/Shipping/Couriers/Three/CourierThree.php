<?php

namespace App\Shipping\Couriers\Three;

use App\Interfaces\ShippingIntegration;
use App\Shipping\Couriers\Three\CourierThreeOriginal;;

class CourierThree implements ShippingIntegration
{
    private static CourierThreeOriginal $originalCalls;
    function __construct()
    {
        self::$originalCalls = new CourierThreeOriginal();
    }

    /**
     * Start Shipping Process ...
     */
    public function createShipment($data)
    {
        self::$originalCalls->createShipmentAndGetWaybill($data);
    }

    /**
     * Track Shipping Process ...
     */
    public function trackShipment($trackingNumber)
    {
        self::$originalCalls->registerNumberToGetTrackingDetails();
        self::$originalCalls->getTrackingDetails($trackingNumber);
    }
}
