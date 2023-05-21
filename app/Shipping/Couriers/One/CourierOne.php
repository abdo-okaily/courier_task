<?php

namespace App\Shipping\Couriers\One;

use App\Interfaces\ShippingIntegration;
use App\Shipping\Couriers\One\CourierOneOriginal;;

class CourierOne implements ShippingIntegration
{
    private static CourierOneOriginal $originalCalls;
    function __construct()
    {
        self::$originalCalls = new CourierOneOriginal();
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
        self::$originalCalls->getShipmentTrackingDetails($trackingNumber);
    }
}