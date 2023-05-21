<?php

namespace App\Shipping\Couriers\Two;

use App\Interfaces\ShippingIntegration;
use App\Shipping\Couriers\Two\CourierTwoOriginal;;

class CourierTwo implements ShippingIntegration
{
    private static CourierTwoOriginal $originalCalls;
    function __construct()
    {
        self::$originalCalls = new CourierTwoOriginal();
    }

    /**
     * Start Shipping Process ...
     */
    public function createShipment($data)
    {
        self::$originalCalls->createShipmentInfo($data);
        self::$originalCalls->createShipmentInstructions();
        self::$originalCalls->getShipmentWaybill();
    }

    /**
     * Track Shipping Process ...
     */
    public function trackShipment($trackingNumber)
    {
        self::$originalCalls->getShipmentTrackingDetails($trackingNumber);
    }
}
