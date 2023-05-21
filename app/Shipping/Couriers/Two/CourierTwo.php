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
        self::createShipmentInfo($data);
        self::createShipmentInstructions();
        self::getShipmentWaybill();
    }

    /**
     * Track Shipping Process ...
     */
    public function trackShipment($trackingNumber)
    {
        self::getShipmentTrackingDetails($trackingNumber);
    }


    private function createShipmentInfo($data)
    {
        echo "Shipment is Created with This Data <br>";
        echo "<pre dir='ltr'>";
        print_r($data);
        echo "</pre>";
    }

    private function createShipmentInstructions()
    {
        echo "Shipment Instructions is Created with This Data <br>";
    }

    private function getShipmentWaybill()
    {
        echo "Shipment way bill is generated <br>";
    }

    private function getShipmentTrackingDetails($trackingNumber)
    {
        echo "Shipment details for package no #" . $trackingNumber . " is :<br>";
        echo "<pre dir='ltr'>";
        print_r([
            'id' => $trackingNumber,
            'status' => fake()->randomElement(['deliver', 'On Way','packaging']),
        ]);
        echo "</pre>";
    }
}
