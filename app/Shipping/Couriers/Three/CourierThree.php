<?php

namespace App\Shipping\Couriers\Three;

use App\Interfaces\ShippingIntegration;

class CourierThree implements ShippingIntegration
{
    /**
     * Start Shipping Process ...
     */
    public function createShipment($data)
    {
        self::createShipmentAndGetWaybill($data);
    }

    /**
     * Track Shipping Process ...
     */
    public function trackShipment($trackingNumber)
    {
        self::registerNumberToGetTrackingDetails();
        self::getTrackingDetails($trackingNumber);
    }

    private function createShipmentAndGetWaybill($data)
    {
        echo "Shipment is Created with This Data and way bill is generated <br>";
        echo "<pre dir='ltr'>";
        print_r($data);
        echo "</pre>";
    }

    private function registerNumberToGetTrackingDetails()
    {
        echo "Shipment Register Number for tracking is Generated <br>";
    }

    private function getTrackingDetails($trackingNumber)
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
