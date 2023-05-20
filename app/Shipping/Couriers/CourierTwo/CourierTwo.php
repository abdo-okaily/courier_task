<?php

namespace App\Shipping\Couriers\CourierTwo;

use App\Interfaces\ShippingIntegration;
use App\Shipping\Couriers\CourierTwo\CourierTwoOriginal;;

class CourierTwo implements ShippingIntegration
{
    private static CourierTwoOriginal $originalCalls;
    function __construct()
    {
        self::$originalCalls = new CourierOneOriginal();
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
